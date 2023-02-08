<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = array('id', 'name', 'credits', 'weeklyHours');

    public function students(){
        return $this->belongsToMany('App\Models\Student', 'evaluations', 'idModule', 'dni');
    }
}
