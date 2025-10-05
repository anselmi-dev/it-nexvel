# Sistema de Metadatos SEO - IT NEXVEL

Este sistema permite gestionar los metadatos SEO de manera dinámica desde el panel de administración de Filament.

## Características

- ✅ Gestión completa de metadatos SEO desde el panel de administración
- ✅ Soporte para Open Graph (Facebook) y Twitter Cards
- ✅ Metadatos básicos (título, descripción, palabras clave, etc.)
- ✅ Configuración por página (home, about, services, contact)
- ✅ Valores por defecto automáticos
- ✅ Comando Artisan para gestión desde línea de comandos
- ✅ Integración automática con las vistas Blade

## Estructura de la Base de Datos

### Tabla: `seo_metadata`

| Campo | Tipo | Descripción |
|-------|------|-------------|
| `id` | bigint | ID único |
| `page` | string | Identificador de la página (home, about, services, contact) |
| `title` | string | Título de la página |
| `description` | text | Descripción de la página |
| `keywords` | text | Palabras clave separadas por comas |
| `author` | string | Autor de la página |
| `robots` | string | Directivas para robots (index, follow, etc.) |
| `language` | string | Idioma de la página |
| `geo_region` | string | Región geográfica |
| `geo_placename` | string | Lugar geográfico |
| `og_type` | string | Tipo de Open Graph |
| `og_title` | string | Título para Open Graph |
| `og_description` | text | Descripción para Open Graph |
| `og_image` | string | Imagen para Open Graph |
| `og_site_name` | string | Nombre del sitio para Open Graph |
| `og_locale` | string | Locale para Open Graph |
| `twitter_card` | string | Tipo de tarjeta de Twitter |
| `twitter_title` | string | Título para Twitter |
| `twitter_description` | text | Descripción para Twitter |
| `twitter_image` | string | Imagen para Twitter |
| `twitter_site` | string | Sitio de Twitter |
| `created_at` | timestamp | Fecha de creación |
| `updated_at` | timestamp | Fecha de actualización |

## Uso del Panel de Administración

1. Accede al panel de administración de Filament
2. Navega a "SEO Metadata" en el menú lateral
3. Puedes:
   - Ver todos los metadatos configurados
   - Editar metadatos existentes
   - Crear nuevos metadatos para páginas
   - Eliminar metadatos

### Formulario de Edición

El formulario está organizado en tres secciones:

#### 1. Información Básica
- Página (identificador único)
- Título (máximo 60 caracteres)
- Descripción (máximo 160 caracteres)
- Palabras clave
- Autor
- Robots
- Idioma
- Región geográfica
- Lugar geográfico

#### 2. Open Graph (Facebook)
- Tipo OG
- Título OG
- Descripción OG
- Imagen OG
- Nombre del sitio OG
- Locale OG

#### 3. Twitter Cards
- Tipo de tarjeta Twitter
- Título Twitter
- Descripción Twitter
- Imagen Twitter
- Sitio Twitter

## Comandos Artisan

### Listar metadatos
```bash
php artisan seo:metadata list
```

### Crear metadatos para una página
```bash
php artisan seo:metadata create home
php artisan seo:metadata create about
php artisan seo:metadata create services
php artisan seo:metadata create contact
```

### Resetear metadatos
```bash
# Resetear una página específica
php artisan seo:metadata reset home

# Resetear todas las páginas
php artisan seo:metadata reset
```

## Integración con las Vistas

El sistema se integra automáticamente con el archivo `resources/views/partials/head.blade.php`:

```php
@php
    use App\Services\SeoService;
    $seo = SeoService::getCurrentPageMetadata();
@endphp

<title>{{ $seo->title ?? $title ?? config('app.name') }}</title>
<meta name="description" content="{{ $seo->description }}">
<!-- ... más metadatos ... -->
```

## Servicio SEO

El servicio `App\Services\SeoService` proporciona métodos útiles:

- `getMetadata(string $page)`: Obtiene metadatos para una página específica
- `getCurrentPageMetadata()`: Obtiene metadatos para la página actual
- `getCurrentPage()`: Determina la página actual basada en la ruta

## Páginas Soportadas

El sistema reconoce automáticamente las siguientes páginas:

- `home`: Página principal (/)
- `about`: Página sobre nosotros (/about, /nosotros)
- `services`: Página de servicios (/services, /servicios)
- `contact`: Página de contacto (/contact, /contacto)

## Valores por Defecto

Cada página tiene valores por defecto que se crean automáticamente:

- **Home**: Metadatos generales de IT NEXVEL
- **About**: Metadatos específicos para la página "Acerca de"
- **Services**: Metadatos específicos para la página "Servicios"
- **Contact**: Metadatos específicos para la página "Contacto"

## Migración y Seeder

### Ejecutar migración
```bash
php artisan migrate
```

### Ejecutar seeder
```bash
php artisan db:seed --class=SeoMetadataSeeder
```

### Ejecutar todos los seeders
```bash
php artisan db:seed
```

## Personalización

### Agregar nuevas páginas

1. Agrega el identificador de la página en el método `getDefaultValues()` del modelo `SeoMetadata`
2. Actualiza el mapeo de rutas en `SeoService::getCurrentPage()`
3. Ejecuta el seeder para crear los metadatos por defecto

### Modificar valores por defecto

Edita el método `getDefaultValues()` en el modelo `SeoMetadata` para cambiar los valores por defecto de cualquier página.

## Notas Importantes

- Los metadatos se cargan automáticamente en cada página
- Si no existen metadatos para una página, se crean con valores por defecto
- Los metadatos se cachean automáticamente por Laravel
- El sistema es compatible con el cache de vistas de Laravel

## Troubleshooting

### Los metadatos no se muestran
1. Verifica que la migración se haya ejecutado: `php artisan migrate:status`
2. Verifica que el seeder se haya ejecutado: `php artisan seo:metadata list`
3. Verifica que el archivo `head.blade.php` esté incluido en las vistas

### Error al crear metadatos
1. Verifica que la tabla `seo_metadata` exista
2. Verifica que el modelo `SeoMetadata` esté correctamente configurado
3. Verifica los logs de Laravel: `storage/logs/laravel.log`
