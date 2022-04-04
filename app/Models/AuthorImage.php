<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorImage extends Model
{
    use HasFactory;

    protected $table = 'author_images';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function author(){
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
