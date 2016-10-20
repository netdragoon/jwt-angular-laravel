<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaFuncao extends Model
{

    protected $primaryKey = "id";
    protected $fillable = array('funcao_id','empresaid');
    protected $table = "empresafuncao";
    public $timestamps = false;
    
}
