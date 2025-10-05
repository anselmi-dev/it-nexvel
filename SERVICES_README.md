# Sistema de Servicios - IT NEXVEL

Este sistema permite gestionar los servicios de la empresa de manera dinámica desde el panel de administración de Filament.

## Características

- ✅ CRUD completo de servicios desde el panel de administración
- ✅ Gestión de iconos personalizados
- ✅ Colores personalizables para cada servicio
- ✅ Orden de visualización personalizable
- ✅ Estado activo/inactivo
- ✅ Slugs automáticos para URLs amigables
- ✅ Descripciones cortas y detalladas
- ✅ Comando Artisan para gestión desde línea de comandos
- ✅ Integración automática con la página principal

## Estructura de la Base de Datos

### Tabla: `services`

| Campo | Tipo | Descripción |
|-------|------|-------------|
| `id` | bigint | ID único |
| `title` | string | Título del servicio |
| `slug` | string | Slug para URLs amigables (único) |
| `description` | text | Descripción detallada del servicio (opcional) |
| `short_description` | string | Descripción corta para las tarjetas |
| `icon` | string | Nombre del archivo del icono (opcional) |
| `color` | string | Color de fondo de la tarjeta (hex) |
| `text_color` | string | Color del texto en la tarjeta (hex) |
| `sort_order` | integer | Orden de visualización |
| `is_active` | boolean | Si el servicio está activo y se muestra |
| `created_at` | timestamp | Fecha de creación |
| `updated_at` | timestamp | Fecha de actualización |

## Uso del Panel de Administración

1. Accede al panel de administración de Filament
2. Navega a "Servicios" en el menú lateral
3. Puedes:
   - Ver todos los servicios configurados
   - Crear nuevos servicios
   - Editar servicios existentes
   - Eliminar servicios
   - Activar/desactivar servicios
   - Reordenar servicios (drag & drop)

### Formulario de Edición

El formulario está organizado en dos secciones:

#### 1. Información del Servicio
- **Título**: Título principal del servicio
- **Slug**: URL amigable (se genera automáticamente)
- **Descripción Corta**: Texto que aparece en las tarjetas
- **Descripción Detallada**: Descripción completa (opcional)
- **Icono**: Nombre del archivo del icono

#### 2. Personalización Visual
- **Color de Fondo**: Color de la tarjeta del servicio
- **Color del Texto**: Color del texto en la tarjeta
- **Orden**: Orden de visualización
- **Activo**: Si el servicio está activo

### Tabla de Gestión

La tabla muestra:
- Icono del servicio
- Título
- Descripción corta
- Slug (copiable)
- Color (copiable)
- Orden
- Estado (activo/inactivo)
- Fecha de actualización

### Filtros Disponibles

- **Estado**: Filtrar por servicios activos, inactivos o todos

### Acciones en Lote

- **Activar**: Activar múltiples servicios
- **Desactivar**: Desactivar múltiples servicios
- **Eliminar**: Eliminar múltiples servicios

## Comandos Artisan

### Listar servicios
```bash
php artisan services:manage list
```

### Activar un servicio
```bash
php artisan services:manage activate infraestructura-tecnologica
```

### Desactivar un servicio
```bash
php artisan services:manage deactivate marketing-digital
```

### Resetear servicios
```bash
php artisan services:manage reset
```

## Integración con las Vistas

El sistema se integra automáticamente con la página principal en `resources/views/pages/home.blade.php`:

```php
@php
    use App\Models\Service;
    $services = Service::getActiveOrdered();
@endphp

@forelse($services as $service)
    <div class="rounded-lg px-4 py-6 min-h-[160px] flex items-center justify-center text-sm font-semibold leading-snug transition-transform hover:scale-105 cursor-pointer"
         style="{{ $service->card_style }}"
         title="{{ $service->title }}">
        <div class="text-center">
            @if($service->icon)
                <img src="{{ $service->icon_url }}" alt="{{ $service->title }}" class="w-8 h-8 mx-auto mb-2" loading="lazy" />
            @endif
            <span>{{ $service->short_description }}</span>
        </div>
    </div>
@endforelse
```

## Servicios por Defecto

El sistema incluye los siguientes servicios por defecto:

1. **Infraestructura Tecnológica** - Infraestructura, cloud, redes y ciberseguridad
2. **Domótica e Inmótica** - Domótica, inmótica y seguridad electrónica
3. **Consultoría y Gestión** - Consultoría, gestión y administración de proyectos
4. **Marketing Digital** - SEO, marketing digital y presencia online
5. **Formación y Outsourcing** - Formación especializada y outsourcing IT

## Gestión de Iconos

### Ubicación de Iconos
Los iconos deben colocarse en la carpeta `public/images/`

### Formatos Soportados
- SVG (recomendado)
- PNG
- JPG
- WebP

### Nomenclatura Recomendada
- `icon-infraestructura.svg`
- `icon-domotica.svg`
- `icon-consultoria.svg`
- `icon-marketing.svg`
- `icon-formacion.svg`

### Tamaño Recomendado
- **32x32px** para iconos pequeños
- **64x64px** para iconos medianos
- **128x128px** para iconos grandes

## Modelo Service

### Métodos Disponibles

```php
// Obtener servicios activos ordenados
Service::getActiveOrdered()

// Scope para servicios activos
Service::active()->get()

// Scope para ordenar
Service::ordered()->get()

// Obtener URL completa del icono
$service->icon_url // "https://example.com/images/icon-service.svg"

// Obtener estilo CSS para la tarjeta
$service->card_style // "background-color: #154269; color: #ffffff;"
```

### Atributos Calculados

- `icon_url`: URL completa del icono
- `card_style`: Estilo CSS para la tarjeta

### Generación Automática de Slugs

Los slugs se generan automáticamente basados en el título:
- "Infraestructura Tecnológica" → "infraestructura-tecnologica"
- "Domótica e Inmótica" → "domotica-inmotica"

## Migración y Seeder

### Ejecutar migración
```bash
php artisan migrate
```

### Ejecutar seeder
```bash
php artisan db:seed --class=ServiceSeeder
```

### Ejecutar todos los seeders
```bash
php artisan db:seed
```

## Personalización

### Agregar Nuevos Servicios

1. Accede al panel de Filament
2. Ve a "Servicios"
3. Haz clic en "Crear"
4. Completa el formulario:
   - Título del servicio
   - Descripción corta (aparece en las tarjetas)
   - Descripción detallada (opcional)
   - Icono (opcional)
   - Colores personalizados
   - Orden de visualización
5. Guarda el servicio

### Modificar Servicios Existentes

1. Accede al panel de Filament
2. Ve a "Servicios"
3. Haz clic en "Editar" en el servicio deseado
4. Modifica los campos necesarios
5. Guarda los cambios

### Reordenar Servicios

1. Accede al panel de Filament
2. Ve a "Servicios"
3. Arrastra y suelta los servicios en el orden deseado
4. Los cambios se guardan automáticamente

### Personalizar Colores

Cada servicio puede tener colores personalizados:
- **Color de Fondo**: Color de la tarjeta del servicio
- **Color del Texto**: Color del texto en la tarjeta

Los colores se aplican automáticamente usando el atributo `card_style`.

## Accesibilidad

### Texto Alternativo
Los iconos incluyen texto alternativo basado en el título del servicio.

### Títulos Descriptivos
Cada tarjeta de servicio incluye un atributo `title` con el nombre del servicio.

### Contraste de Colores
Se recomienda usar colores con buen contraste para asegurar la legibilidad.

## Rendimiento

### Carga Optimizada
- Los iconos se cargan con `loading="lazy"`
- Solo se muestran servicios activos
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

### Los servicios no aparecen en la página principal
1. Verifica que los servicios estén marcados como activos
2. Verifica que la página home esté usando el código dinámico
3. Verifica que la migración se haya ejecutado

### Error al crear/editar servicios
1. Verifica que la tabla `services` exista
2. Verifica que el modelo `Service` esté correctamente configurado
3. Verifica los logs de Laravel: `storage/logs/laravel.log`

### Problemas de ordenamiento
1. Verifica que el campo `sort_order` tenga valores numéricos
2. Usa el comando `services:manage list` para verificar el orden actual
3. Reordena desde el panel de administración

### Slugs duplicados
1. Los slugs deben ser únicos
2. El sistema genera slugs automáticamente basados en el título
3. Puedes modificar el slug manualmente si es necesario

## Notas Importantes

- Los servicios se cargan automáticamente en la página principal
- Solo se muestran servicios marcados como activos
- El orden se respeta según el campo `sort_order`
- Los cambios se reflejan inmediatamente en el sitio web
- El sistema es compatible con el cache de vistas de Laravel
- Los slugs se generan automáticamente pero pueden ser editados manualmente
