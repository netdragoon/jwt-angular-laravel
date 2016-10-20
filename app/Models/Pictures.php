<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    protected $primaryKey = "id";
    protected $fillable = array('name','mimetype','state','length','extension');
    protected $table = "pictures";
    public $timestamps = false;
}
