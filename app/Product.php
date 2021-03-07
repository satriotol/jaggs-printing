<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = [
        'title','price','material','size','image','price_list','color'
    ];
    public function deleteImage()
    {
        Storage::delete([$this->image],[$this->price_list],[$this->color]);
    }
}
