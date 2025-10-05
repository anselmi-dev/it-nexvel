<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoMetadata extends Model
{
    protected $fillable = [
        'page',
        'title',
        'description',
        'keywords',
        'author',
        'robots',
        'language',
        'geo_region',
        'geo_placename',
        'og_type',
        'og_title',
        'og_description',
        'og_image',
        'og_site_name',
        'og_locale',
        'twitter_card',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'twitter_site',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Obtener metadatos SEO por página
     */
    public static function getByPage(string $page): ?self
    {
        return static::where('page', $page)->first();
    }

    /**
     * Obtener metadatos SEO por página o crear con valores por defecto
     */
    public static function getByPageOrCreate(string $page): self
    {
        return static::firstOrCreate(
            ['page' => $page],
            static::getDefaultValues($page)
        );
    }

    /**
     * Valores por defecto para una página
     */
    public static function getDefaultValues(string $page): array
    {
        $defaults = [
            'title' => 'IT NEXVEL - Líder en Soluciones Tecnológicas Chile',
            'description' => 'Especialistas en infraestructura IT, desarrollo de software, ciberseguridad y transformación digital. Conectamos innovación, eficiencia y sostenibilidad para empresas en Chile.',
            'keywords' => 'soluciones tecnológicas Chile, desarrollo software Santiago, ciberseguridad empresas, infraestructura IT Chile, consultoría tecnológica, transformación digital, automatización industrial, redes informáticas, telecomunicaciones, marketing digital, outsourcing IT, formación tecnológica, domótica, inmótica, energía renovable',
            'author' => 'IT NEXVEL',
            'robots' => 'index, follow',
            'language' => 'es',
            'geo_region' => 'CL',
            'geo_placename' => 'Chile',
            'og_type' => 'website',
            'og_title' => 'IT NEXVEL - Líder en Soluciones Tecnológicas Chile',
            'og_description' => 'Especialistas en infraestructura IT, desarrollo de software, ciberseguridad y transformación digital. Conectamos innovación, eficiencia y sostenibilidad para empresas en Chile.',
            'og_image' => 'images/logo.png',
            'og_site_name' => 'IT NEXVEL',
            'og_locale' => 'es_CL',
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'IT NEXVEL - Soluciones Tecnológicas Chile',
            'twitter_description' => 'Líder en infraestructura IT, desarrollo de software y ciberseguridad. Transformamos empresas con tecnología innovadora y sostenible.',
            'twitter_image' => 'images/logo.png',
            'twitter_site' => '@itnexvel',
        ];

        // Personalizar según la página
        switch ($page) {
            case 'home':
                break; // Usar valores por defecto
            case 'about':
                $defaults['title'] = 'Acerca de Nosotros - IT NEXVEL';
                $defaults['description'] = 'Conoce a IT NEXVEL, líder en soluciones tecnológicas en Chile. Nuestra experiencia y compromiso con la innovación nos posicionan como el socio tecnológico ideal para tu empresa.';
                break;
            case 'services':
                $defaults['title'] = 'Nuestros Servicios - IT NEXVEL';
                $defaults['description'] = 'Descubre nuestros servicios tecnológicos: infraestructura IT, desarrollo de software, ciberseguridad, domótica y más. Soluciones personalizadas para tu empresa.';
                break;
            case 'contact':
                $defaults['title'] = 'Contacto - IT NEXVEL';
                $defaults['description'] = 'Contáctanos para conocer cómo podemos ayudarte con soluciones tecnológicas innovadoras. Estamos en Santiago, Chile.';
                break;
        }

        return $defaults;
    }
}
