<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Project extends Model
{
     
     protected $fillable = ['name', 'in_queue'];

     public function images() {
     	return $this->hasMany('App\Image');
     }
     
}