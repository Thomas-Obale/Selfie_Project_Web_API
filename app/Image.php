<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Image extends Model
{
     
     protected $fillable = ['url'];

     /**
      * A Many to One Relationship
      * @return Project
      */
     public function project() {
     	return $this->belongsTo('App\Project');
     }
     
}