<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'author';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function product(){
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    public function authorImages(){
        return $this->hasMany(AuthorImage::class, 'author_id', 'id');
    }
}
