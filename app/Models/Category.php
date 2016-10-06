<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    use HybridRelations;

    protected $table = "category";
    protected $collection = "category";
    protected $connection = "mongodb";
    protected $primaryKey = "_id";
    protected $fillable = ['description'];
}
