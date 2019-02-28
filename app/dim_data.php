<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dim_data extends Model
{
    //
    protected $table = 'dim_date';

    protected $primaryKey = 'id_date';

    protected $fillable = [
        'fecha', 'diaSemana', 'anio', 'dia', 'nombreMes', 'mes', 'num_trimestre', 'trimestre'
    ];

    public function hechos()
    {
        return $this->hasMany(hechos::class,'id_hechos');
    }

}
