<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $protected = "products";
    public $primarykey="id";
    public $timestamps= true;
    // public $fillable=['name','slug','description','extract','price','image','categoria_id'];
    public $guarded = [];

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
