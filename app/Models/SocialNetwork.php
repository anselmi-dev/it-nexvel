<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    protected $fillable = [
        'name',
        'url',
        'icon',
        'icon_type',
        'icon_svg',
        'alt_text',
        'color',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope para obtener solo redes sociales activas
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope para ordenar por sort_order
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    /**
     * Obtener todas las redes sociales activas ordenadas
     */
    public static function getActiveOrdered()
    {
        return static::active()->ordered()->get();
    }

    /**
     * Obtener el nombre de la red social sin espacios para usar como clase CSS
     */
    public function getSlugAttribute()
    {
        return strtolower(str_replace(' ', '-', $this->name));
    }

    /**
     * Obtener la URL completa del icono
     */
    public function getIconUrlAttribute()
    {
        if (!$this->icon) {
            return null;
        }

        return asset('images/' . $this->icon);
    }
}
