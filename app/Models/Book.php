<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $primaryKey = "id";
    protected $fillable = ['title'];
    public $timestamps = false;

    public function author()
    {
        return $this->belongsToMany(Author::class, 'booksauthors', 'bookid', 'authorid')
            ->withPivot('quant','value');
    }
}
