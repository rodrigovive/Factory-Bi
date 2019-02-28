<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dim_redSocial extends Model
{
    //
    protected $table = 'dim_redSocial';

    protected $primaryKey = 'id_redSocial';

    protected $fillable = [
        'nombre_redSocial'
    ];

    public function hechos()
    {
        return $this->hasMany(hechos::class,'id_hechos');
    }

}
