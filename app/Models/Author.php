<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";
    protected $primaryKey = "id";
    protected $fillable = ['name'];
    public $timestamps = false;

    public function book()
    {
        return $this->belongsToMany(Book::class, 'booksauthors', 'authorid', 'bookid')
            ->withPivot('quant','value');
    }

    public function soma()
    {
        return $this->belongsTo(BooksAuthors::class, 'id','authorid')
            ->selectRaw('authorid,sum(value*quant) as total')
            ->groupBy('authorid');
    }
}
