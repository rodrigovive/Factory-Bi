<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dim_zona extends Model
{
    //

    protected $table = 'dim_zona';

    protected $primaryKey = 'id_zona';

    protected $fillable = [
        'nombre_zona'
    ];

    public function ciudades()
    {
        return $this->hasMany(dim_ciudad::class,'dim_ciudad');
    }

    public function hechos()
    {
        return $this->hasMany(hechos::class,'id_hechos');
    }

}
