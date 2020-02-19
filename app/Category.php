<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $protected = "Categories";
    public $primarykey="id";
    public $timestamps= true;
    public $fillable=['name','slug','description'];

    public function products(){
      return $this->hasMany('App\Product');
    }

}
 