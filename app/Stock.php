<?php

namespace App;


class Stock extends \Eloquent {

    public $timestamps = false;

    public function getPrecioAttribute($value){

        return (float) $value;

    }

}
