<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categoria extends Model
{
    use SoftDeletes;

    protected $fillable = ['NmCategoria', 'DscCategoria'];
    protected $primaryKey = 'CdCategoria';
    protected $dates = ['deleted_at'];
    protected $table = "categoria";

    public function subCategorias()
    {
        return $this->hasMany('App\SubCategoria','CdCategoria','CdCategoria');
    }
}