<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Project extends Model
{
     
     protected $fillable = ['name'];

     public function images() {
     	return $this->hasMany('App\Image');
     }
     
}