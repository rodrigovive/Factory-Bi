<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hecho extends Model
{
    //
    protected $table = 'hechos';

    protected $primaryKey = 'id_hechos';

    protected $fillable = [
        'num_clicks', 'num_prints', 'id_redSocial', 'id_producto', 'id_familia', 'id_date', 'id_ciudad', 'id_zona', 'id_gustos', 'id_rangoEdad', 'sexo'
    ];

    public function redSocial()
    {
        return $this->belongsTo(dim_redSocial::class,'id_redSocial');
    }

    public function producto()
    {
        return $this->belongsTo(dim_producto::class,'id_producto');
    }
    public function familia()
    {
        return $this->belongsTo(dim_familia::class,'id_familia');
    }
    public function zona()
    {
        return $this->belongsTo(dim_zona::class,'id_zona');
    }
    public function date()
    {
        return $this->belongsTo(dim_date::class,'id_date');
    }
    public function ciudad()
    {
        return $this->belongsTo(dim_ciudad::class,'id_ciudad');
    }
    public function rangoEdad()
    {
        return $this->belongsTo(dim_rangoEdad::class,'id_rangoEdad');
    }
    public function gustos()
    {
        return $this->belongsTo(dim_gustos::class,'id_gustos');
    }

}
