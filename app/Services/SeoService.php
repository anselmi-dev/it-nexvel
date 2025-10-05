<?php

namespace App\Services;

use App\Models\SeoMetadata;

class SeoService
{
    /**
     * Obtener metadatos SEO para una página específica
     */
    public static function getMetadata(string $page): SeoMetadata
    {
        return SeoMetadata::getByPageOrCreate($page);
    }

    /**
     * Obtener metadatos SEO para la página actual basado en la ruta
     */
    public static function getCurrentPageMetadata(): SeoMetadata
    {
        $page = self::getCurrentPage();
        return self::getMetadata($page);
    }

    /**
     * Determinar la página actual basado en la ruta
     */
    public static function getCurrentPage(): string
    {
        $route = request()->route();

        if (!$route) {
            return 'home';
        }

        $routeName = $route->getName();

        // Mapear rutas a identificadores de página
        $pageMap = [
            'home' => 'home',
            'about' => 'about',
            'services' => 'services',
            'contact' => 'contact',
            'nosotros' => 'about',
            'servicios' => 'services',
            'contacto' => 'contact',
        ];

        // Si la ruta tiene un nombre específico, usarlo
        if ($routeName && isset($pageMap[$routeName])) {
            return $pageMap[$routeName];
        }

        // Si no, determinar por la URL
        $path = request()->path();

        if ($path === '/' || $path === '') {
            return 'home';
        }

        $segments = explode('/', $path);
        $firstSegment = $segments[0];

        return $pageMap[$firstSegment] ?? 'home';
    }
}
