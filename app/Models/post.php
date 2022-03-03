<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';
    public $primaryKey = 'id';
    public $timestamps = true;
    
    public function user(){
            return $this->belongsTo('App\Models\User');
    }
    
    
    
    //use HasFactory;
}
