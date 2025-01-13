<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;

    protected $table = "administrador";
    protected $primaryKey = "id"; 
    public $timestamps = false;
    protected $fillable = [
        "cedula",
        "email",
        "tipo_administrador",   
    ];
}
