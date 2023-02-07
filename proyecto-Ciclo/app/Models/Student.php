<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = array('dni', 'name', 'phone', 'address');
    protected $primaryKey = 'dni';
    

    public function modules(){
        return $this->belongsToMany('App\Models\Module', 'evaluations', 'dni', 'idModule');
    }
    
    public function evaluations(){
        return $this->hasMany('App\Models\Evaluation', 'dni');
    }
}
