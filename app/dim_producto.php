<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dim_producto extends Model
{
    //

    protected $table = 'dim_producto';

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre_producto', 'id_familia'
    ];

    public function zona()
    {
        return $this->belongsTo(dim_familia::class,'id_familia');
    }
    public function hechos()
    {
        return $this->hasMany(hechos::class,'id_hechos');
    }
}
