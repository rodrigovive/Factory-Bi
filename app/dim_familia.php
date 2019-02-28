<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dim_familia extends Model
{
    //
    protected $table = 'dim_familia';

    protected $primaryKey = 'id_familia';

    protected $fillable = [
        'nombre_familia'
    ];

    public function productos()
    {
        return $this->hasMany(dim_producto::class,'id_producto');
    }

    public function hechos()
    {
        return $this->hasMany(hechos::class,'id_hechos');
    }
}
