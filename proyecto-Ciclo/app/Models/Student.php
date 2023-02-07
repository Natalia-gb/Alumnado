<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'dni';

    public function modules(){
        return $this->belongsToMany('App\Models\Modules', 'evaluations', 'idModule', 'dni');
    }
    
    public function evaluations(){
        return $this->hasMany('App\Models\Evaluation', 'dni');
    }
}
