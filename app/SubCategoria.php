<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SubCategoria extends Model
{
    use SoftDeletes;

    protected $fillable = ['CdCategoria','NmSubCategoria', 'DscSubCategoria', 'FlgPontua', 'QtdPontos', 'MaxPontosCategoria'];
    protected $primaryKey = 'CdSubCategoria';
    protected $dates = ['deleted_at'];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','CdCategoria','CdCategoria');
    }

    public function produtos(){
        return  $this->hasMany('App\Produto','CdSubCategoria','CdSubCategoria');
    }

}