<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dim_gusto extends Model
{
    //
    protected $table = 'dim_gustos';

    protected $primaryKey = 'id_gustos';

    protected $fillable = [
        'nombre_gustos'
    ];
    public function hechos()
    {
        return $this->hasMany(hechos::class,'id_hechos');
    }
}
