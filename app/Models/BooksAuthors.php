<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksAuthors extends Model
{
    protected $table = "booksauthors";
    protected $primaryKey = array('authorid','bookid');
    protected $fillable = ['authorid','bookid','quant','value'];
    public $timestamps = false;
    public $incrementing = false;
}