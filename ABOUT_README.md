# Sistema About (Acerca de Nosotros) - IT NEXVEL

Este sistema permite gestionar toda la información de la sección "Acerca de Nosotros" de manera dinámica desde el panel de administración de Filament.

## Características

- ✅ CRUD completo de información corporativa desde el panel de administración
- ✅ Gestión de misión, visión y valores
- ✅ Características destacadas dinámicas
- ✅ Miembros del equipo con información detallada
- ✅ Estadísticas de la empresa
- ✅ Información de contacto
- ✅ Gestión de imágenes
- ✅ Comando Artisan para gestión desde línea de comandos
- ✅ Integración automática con las vistas

## Estructura de la Base de Datos

### Tabla: `abouts`

| Campo | Tipo | Descripción |
|-------|------|-------------|
| `id` | bigint | ID único |
| `title` | string | Título principal de la sección |
| `subtitle` | text | Subtítulo |
| `description` | text | Descripción principal de la empresa |
| `mission` | text | Misión de la empresa |
| `vision` | text | Visión de la empresa |
| `values` | text | Valores de la empresa |
| `hero_image` | string | Imagen principal para hero |
| `about_image` | string | Imagen para la sección about |
| `features` | json | Características destacadas (array) |
| `team_members` | json | Miembros del equipo (array) |
| `phone` | string | Teléfono de contacto |
| `email` | string | Email de contacto |
| `address` | text | Dirección de la empresa |
| `years_experience` | integer | Años de experiencia |
| `projects_completed` | integer | Proyectos completados |
| `happy_clients` | integer | Clientes satisfechos |
| `is_active` | boolean | Si está activo |
| `created_at` | timestamp | Fecha de creación |
| `updated_at` | timestamp | Fecha de actualización |

## Uso del Panel de Administración

1. Accede al panel de administración de Filament
2. Navega a "Acerca de Nosotros" en el menú lateral
3. Puedes:
   - Ver toda la información corporativa
   - Editar información existente
   - Crear nueva información (si no existe)
   - Eliminar información
   - Activar/desactivar

### Formulario de Edición

El formulario está organizado en 6 secciones:

#### 1. Información Principal
- **Título Principal**: Título de la sección About
- **Subtítulo**: Subtítulo descriptivo
- **Descripción Principal**: Descripción completa de la empresa

#### 2. Misión, Visión y Valores
- **Misión**: Misión de la empresa
- **Visión**: Visión de la empresa
- **Valores**: Valores corporativos

#### 3. Imágenes
- **Imagen Hero**: Imagen principal para la sección hero
- **Imagen About**: Imagen para la sección about

#### 4. Características Destacadas
- **Repeater** para agregar características:
  - Título de la característica
  - Descripción
  - Icono

#### 5. Miembros del Equipo
- **Repeater** para agregar miembros del equipo:
  - Nombre
  - Cargo/Posición
  - Biografía
  - Imagen
  - LinkedIn

#### 6. Información de Contacto
- **Teléfono**: Número de teléfono
- **Email**: Dirección de email
- **Dirección**: Dirección física

#### 7. Estadísticas
- **Años de Experiencia**: Años en el mercado
- **Proyectos Completados**: Número de proyectos
- **Clientes Satisfechos**: Número de clientes
- **Activo**: Estado de la información

### Tabla de Gestión

La tabla muestra:
- Imagen hero
- Título
- Subtítulo
- Descripción (truncada)
- Estadísticas (años, proyectos, clientes)
- Estado (activo/inactivo)
- Fecha de actualización

### Filtros Disponibles

- **Estado**: Filtrar por información activa, inactiva o todas

### Acciones en Lote

- **Activar**: Activar información
- **Desactivar**: Desactivar información
- **Eliminar**: Eliminar información

## Comandos Artisan

### Mostrar información de About
```bash
php artisan about:manage show
```

### Resetear información de About
```bash
php artisan about:manage reset
```

## Integración con las Vistas

El sistema se integra automáticamente con las vistas usando el modelo:

```php
@php
    use App\Models\About;
    $about = About::getActive();
@endphp

@if($about)
    <h1>{{ $about->title }}</h1>
    <h2>{{ $about->subtitle }}</h2>
    <p>{{ $about->description }}</p>
    
    @if($about->features_array)
        @foreach($about->features_array as $feature)
            <div class="feature">
                <h3>{{ $feature['title'] }}</h3>
                <p>{{ $feature['description'] }}</p>
            </div>
        @endforeach
    @endif
@endif
```

## Datos por Defecto

El sistema incluye información completa por defecto:

### Información Corporativa
- **Título**: IT NEXVEL - Líder en Soluciones Tecnológicas
- **Subtítulo**: Transformamos empresas con tecnología innovadora y sostenible
- **Descripción**: Descripción completa de la empresa
- **Misión**: Misión corporativa
- **Visión**: Visión corporativa
- **Valores**: Valores de la empresa

### Características Destacadas
1. **Innovación** - Tecnologías vanguardistas
2. **Compromiso** - Éxito de los clientes
3. **Soluciones** - Personalizadas y adaptables
4. **Acompañamiento** - Soporte continuo

### Miembros del Equipo
1. **María González** - CEO & Fundadora
2. **Carlos Rodríguez** - CTO
3. **Ana Martínez** - Directora de Ciberseguridad

### Estadísticas
- **Años de experiencia**: 5
- **Proyectos completados**: 150
- **Clientes satisfechos**: 75

## Modelo About

### Métodos Disponibles

```php
// Obtener información activa
About::getActive()

// Scope para información activa
About::active()->first()

// Obtener URL completa de imagen hero
$about->hero_image_url

// Obtener URL completa de imagen about
$about->about_image_url

// Obtener características como array
$about->features_array

// Obtener miembros del equipo como array
$about->team_members_array

// Obtener estadísticas como array
$about->stats
```

### Atributos Calculados

- `hero_image_url`: URL completa de la imagen hero
- `about_image_url`: URL completa de la imagen about
- `features_array`: Características como array
- `team_members_array`: Miembros del equipo como array
- `stats`: Estadísticas como array

## Migración y Seeder

### Ejecutar migración
```bash
php artisan migrate
```

### Ejecutar seeder
```bash
php artisan db:seed --class=AboutSeeder
```

### Ejecutar todos los seeders
```bash
php artisan db:seed
```

## Personalización

### Editar Información Corporativa

1. Accede al panel de Filament
2. Ve a "Acerca de Nosotros"
3. Edita la información existente o crea nueva
4. Completa todos los campos necesarios
5. Guarda los cambios

### Agregar Características Destacadas

1. En el formulario de About
2. Ve a la sección "Características Destacadas"
3. Haz clic en "Agregar"
4. Completa:
   - Título de la característica
   - Descripción
   - Icono (opcional)
5. Guarda

### Agregar Miembros del Equipo

1. En el formulario de About
2. Ve a la sección "Miembros del Equipo"
3. Haz clic en "Agregar"
4. Completa:
   - Nombre
   - Cargo/Posición
   - Biografía
   - Imagen (opcional)
   - LinkedIn (opcional)
5. Guarda

### Actualizar Estadísticas

1. En el formulario de About
2. Ve a la sección "Estadísticas"
3. Actualiza los números:
   - Años de experiencia
   - Proyectos completados
   - Clientes satisfechos
4. Guarda

## Gestión de Imágenes

### Ubicación de Imágenes
Las imágenes deben colocarse en la carpeta `public/images/`

### Formatos Soportados
- JPG/JPEG
- PNG
- WebP
- SVG

### Nomenclatura Recomendada
- `hero-about.jpg` - Imagen principal
- `about-us.jpg` - Imagen de la sección
- `team-member-1.jpg` - Miembros del equipo
- `icon-innovacion.svg` - Iconos de características

### Tamaño Recomendado
- **Hero Image**: 1920x1080px
- **About Image**: 800x600px
- **Team Members**: 400x400px (cuadrada)
- **Icons**: 64x64px

## Accesibilidad

### Texto Alternativo
Las imágenes incluyen texto alternativo basado en el contexto.

### Estructura Semántica
La información se estructura de manera semántica para mejor accesibilidad.

### Contraste
Se recomienda usar colores con buen contraste para la legibilidad.

## Rendimiento

### Carga Optimizada
- Las imágenes se cargan con `loading="lazy"`
- Solo se muestra información activa
- Los datos se cachean automáticamente por Laravel

### Consultas Eficientes
- Uso de scopes para optimizar consultas
- Carga solo campos necesarios
- Una sola consulta para obtener toda la información

## Troubleshooting

### La información no se muestra
1. Verifica que exista información de About
2. Verifica que esté marcada como activa
3. Verifica que las vistas estén usando el modelo correctamente

### Error al crear/editar información
1. Verifica que la tabla `abouts` exista
2. Verifica que el modelo `About` esté correctamente configurado
3. Verifica los logs de Laravel: `storage/logs/laravel.log`

### Las imágenes no se muestran
1. Verifica que los archivos existan en `public/images/`
2. Verifica que los nombres coincidan exactamente
3. Verifica los permisos de la carpeta `public/images/`

### Problemas con JSON (features, team_members)
1. Verifica que los datos JSON sean válidos
2. Usa el comando `about:manage show` para verificar la estructura
3. Revisa la configuración de casts en el modelo

## Notas Importantes

- Solo debe haber una entrada activa de About a la vez
- Los campos JSON (features, team_members) se validan automáticamente
- Los cambios se reflejan inmediatamente en el sitio web
- El sistema es compatible con el cache de vistas de Laravel
- Las imágenes se optimizan automáticamente por el navegador
