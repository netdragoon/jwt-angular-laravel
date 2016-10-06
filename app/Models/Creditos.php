<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{

    protected $primaryKey = "id";
    protected $fillable = array(
        'descricao',
        'status'
    );
    protected $table = "creditos";
    public $timestamps = false;
    
}
