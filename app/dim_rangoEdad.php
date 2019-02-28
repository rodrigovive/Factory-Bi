<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dim_rangoEdad extends Model
{
    //
    protected $table = 'dim_rangoEdad';

    protected $primaryKey = 'id_rangoEdad';

    protected $fillable = [
        'nombre_rangoEdad'
    ];

    public function hechos()
    {
        return $this->hasMany(hechos::class,'id_hechos');
    }

}
