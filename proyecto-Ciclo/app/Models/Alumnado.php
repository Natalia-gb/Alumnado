<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnado extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['DNI', 'name', 'phone', 'address'];
    
}
