<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    //la tabla a conectar a este modelo
    protected $table="countries";
    //la clve primaria de esa tabla
    protected $primaryKey = "country_id";
    //omitir campos de uiditoria
    public $timestamps =false;

    use HasFactory;
}
