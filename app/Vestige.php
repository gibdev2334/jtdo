<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Vestige extends Model
{
    // public function categoryId() {
        public function category() {
        return $this->belongsTo('App\Category');
    }
}
