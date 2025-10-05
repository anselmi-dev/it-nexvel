# Sistema de Redes Sociales - IT NEXVEL

Este sistema permite gestionar las redes sociales de manera dinámica desde el panel de administración de Filament.

## Características

- ✅ CRUD completo de redes sociales desde el panel de administración
- ✅ Gestión de iconos personalizados
- ✅ URLs de redes sociales
- ✅ Texto alternativo para accesibilidad
- ✅ Colores personalizados para cada red social
- ✅ Orden de visualización personalizable
- ✅ Estado activo/inactivo
- ✅ Comando Artisan para gestión desde línea de comandos
- ✅ Integración automática con el componente social-brands

## Estructura de la Base de Datos

### Tabla: `social_networks`

| Campo | Tipo | Descripción |
|-------|------|-------------|
| `id` | bigint | ID único |
| `name` | string | Nombre de la red social (ej: LinkedIn, Facebook) |
| `url` | string | URL completa de la red social |
| `icon` | string | Nombre del archivo del icono (ej: icon-linkedin.png) |
| `alt_text` | string | Texto alternativo para accesibilidad |
| `color` | string | Color de la red social en formato hex (ej: #0077B5) |
| `sort_order` | integer | Orden de visualización (menor número = primero) |
| `is_active` | boolean | Si la red social está activa y se muestra |
| `created_at` | timestamp | Fecha de creación |
| `updated_at` | timestamp | Fecha de actualización |

## Uso del Panel de Administración

1. Accede al panel de administración de Filament
2. Navega a "Redes Sociales" en el menú lateral
3. Puedes:
   - Ver todas las redes sociales configuradas
   - Crear nuevas redes sociales
   - Editar redes sociales existentes
   - Eliminar redes sociales
   - Activar/desactivar redes sociales
   - Reordenar redes sociales (drag & drop)

### Formulario de Edición

El formulario incluye los siguientes campos:

- **Nombre**: Nombre de la red social
- **URL**: URL completa de la red social
- **Icono**: Nombre del archivo del icono (debe estar en `public/images/`)
- **Texto Alternativo**: Texto para accesibilidad
- **Color**: Color de la red social (opcional)
- **Orden**: Orden de visualización
- **Activa**: Si la red social está activa

### Tabla de Gestión

La tabla muestra:
- Icono de la red social
- Nombre
- URL (con enlace directo)
- Texto alternativo
- Color (copiable)
- Orden
- Estado (activa/inactiva)
- Fecha de actualización

### Filtros Disponibles

- **Estado**: Filtrar por redes activas, inactivas o todas

### Acciones en Lote

- **Activar**: Activar múltiples redes sociales
- **Desactivar**: Desactivar múltiples redes sociales
- **Eliminar**: Eliminar múltiples redes sociales

## Comandos Artisan

### Listar redes sociales
```bash
php artisan social:networks list
```

### Activar una red social
```bash
php artisan social:networks activate LinkedIn
php artisan social:networks activate "X (Twitter)"
```

### Desactivar una red social
```bash
php artisan social:networks deactivate YouTube
```

### Resetear redes sociales
```bash
php artisan social:networks reset
```

## Integración con las Vistas

El sistema se integra automáticamente con el componente `resources/views/components/layouts/social-brands.blade.php`:

```php
@php
    use App\Models\SocialNetwork;
    $socialNetworks = SocialNetwork::getActiveOrdered();
@endphp

@forelse($socialNetworks as $network)
    <a href="{{ $network->url }}" target="_blank" rel="noopener noreferrer">
        @if($network->icon)
            <img src="{{ $network->icon_url }}" alt="{{ $network->alt_text }}" />
        @else
            {{-- Fallback SVG --}}
        @endif
    </a>
@endforelse
```

## Redes Sociales por Defecto

El sistema incluye las siguientes redes sociales por defecto:

1. **LinkedIn** - Activa
2. **X (Twitter)** - Activa
3. **Instagram** - Activa
4. **Facebook** - Activa
5. **YouTube** - Inactiva (puede activarse desde el panel)

## Gestión de Iconos

### Ubicación de Iconos
Los iconos deben colocarse en la carpeta `public/images/`

### Formatos Soportados
- PNG (recomendado)
- SVG
- JPG
- WebP

### Nomenclatura Recomendada
- `icon-linkedin.png`
- `icon-facebook.png`
- `icon-instagram.png`
- `icon-x.png`
- `icon-youtube.png`

### Tamaño Recomendado
- **16x16px** para iconos pequeños
- **32x32px** para iconos medianos
- **64x64px** para iconos grandes

## Modelo SocialNetwork

### Métodos Disponibles

```php
// Obtener redes sociales activas ordenadas
SocialNetwork::getActiveOrdered()

// Scope para redes activas
SocialNetwork::active()->get()

// Scope para ordenar
SocialNetwork::ordered()->get()

// Obtener slug de la red social
$network->slug // "linkedin", "x-twitter", etc.

// Obtener URL completa del icono
$network->icon_url // "https://example.com/images/icon-linkedin.png"
```

### Atributos Calculados

- `slug`: Nombre sin espacios para usar como clase CSS
- `icon_url`: URL completa del icono

## Migración y Seeder

### Ejecutar migración
```bash
php artisan migrate
```

### Ejecutar seeder
```bash
php artisan db:seed --class=SocialNetworkSeeder
```

### Ejecutar todos los seeders
```bash
php artisan db:seed
```

## Personalización

### Agregar Nuevas Redes Sociales

1. Accede al panel de Filament
2. Ve a "Redes Sociales"
3. Haz clic en "Crear"
4. Completa el formulario
5. Guarda la red social

### Modificar Redes Existentes

1. Accede al panel de Filament
2. Ve a "Redes Sociales"
3. Haz clic en "Editar" en la red social deseada
4. Modifica los campos necesarios
5. Guarda los cambios

### Reordenar Redes Sociales

1. Accede al panel de Filament
2. Ve a "Redes Sociales"
3. Arrastra y suelta las redes sociales en el orden deseado
4. Los cambios se guardan automáticamente

## Accesibilidad

### Texto Alternativo
Cada red social debe tener un texto alternativo descriptivo:
- "Síguenos en LinkedIn"
- "Síguenos en X (Twitter)"
- "Síguenos en Instagram"

### Enlaces
- Todos los enlaces abren en una nueva pestaña (`target="_blank"`)
- Incluyen `rel="noopener noreferrer"` por seguridad
- Tienen atributo `title` con el texto alternativo

## Rendimiento

### Carga Optimizada
- Los iconos se cargan con `loading="lazy"`
- Solo se muestran redes sociales activas
- Los datos se cachean automáticamente por Laravel

### Consultas Eficientes
- Uso de scopes para optimizar consultas
- Carga solo campos necesarios
- Ordenamiento en base de datos

## Troubleshooting

### Los iconos no se muestran
1. Verifica que el archivo del icono exista en `public/images/`
2. Verifica que el nombre del archivo coincida exactamente
3. Verifica los permisos de la carpeta `public/images/`

### Las redes sociales no aparecen en el sitio
1. Verifica que las redes sociales estén marcadas como activas
2. Verifica que el componente `social-brands` esté incluido en la vista
3. Verifica que la migración se haya ejecutado

### Error al crear/editar redes sociales
1. Verifica que la tabla `social_networks` exista
2. Verifica que el modelo `SocialNetwork` esté correctamente configurado
3. Verifica los logs de Laravel: `storage/logs/laravel.log`

### Problemas de ordenamiento
1. Verifica que el campo `sort_order` tenga valores numéricos
2. Usa el comando `social:networks list` para verificar el orden actual
3. Reordena desde el panel de administración

## Notas Importantes

- Las redes sociales se cargan automáticamente en el componente social-brands
- Solo se muestran redes sociales marcadas como activas
- El orden se respeta según el campo `sort_order`
- Los cambios se reflejan inmediatamente en el sitio web
- El sistema es compatible con el cache de vistas de Laravel
