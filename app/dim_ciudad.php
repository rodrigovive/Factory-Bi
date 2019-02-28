<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dim_ciudad extends Model
{
    //
    protected $table = 'dim_ciudad';

    protected $primaryKey = 'id_ciudad';

    protected $fillable = [
        'nombre_ciudad', 'zipCode_ciudad', 'id_zona'
    ];

    public function zona()
    {
        return $this->belongsTo(dim_zona::class,'id_zona');
    }
    public function hechos()
    {
        return $this->hasMany(hechos::class,'id_hechos');
    }
}
