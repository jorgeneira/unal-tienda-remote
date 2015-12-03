<?php

namespace App;


class KitchenRequest extends \Eloquent {

    public $fillable = [
        'ancho',
        'largo',
        'alto',
        'tipo_cocina',
        'tipo_estufa',
        'tipo_lavaplatos',
        'extractor',
        'modulos_seccion_1',
        'modulos_seccion_2',
        'modulos_seccion_3',
        'seccion_estufa',
        'modulo_estufa',
        'seccion_lavaplatos',
        'modulo_lavaplatos',
        'manija',
        'material',
        'meson',
        'color',
    ];

    public function getSeccionesAttribute($data){

        return json_decode($data);

    }

    public function setSeccionesAttribute($data){

        $this->attributes['secciones'] = json_encode($data);

    }

    /**
     * @param static $query
     */
    public function scopeNuevos($query){

        return $query->where('leido', 0);

    }

    public function client() {

        return $this->belongsTo(Client::class);
    }

    public function getAltoAttribute($valor){

        return $valor * 100;
    }

    public function getAnchoAttribute($valor){

        return $valor * 100;
    }

    public function getLargoAttribute($valor){

        return $valor * 100;
    }

}
