<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    protected $table = "produtos";

    protected $fillable = [
        'CdSubCategoria',
        'NmProduto',
        'DscProduto',
        'VlUnit',
        'UnitEmEstoque',
        'FlgDescontinuado',
        'FlgProdutoVisivel',
        'Visivel_Ini',
        'Visivel_Fim',
        'FlgPontua',
        'QtdPontos',
        'MaxPontosPorSubCategoria'
    ];
    protected $primaryKey = 'CdProduto';
    protected $dates = ['deleted_at'];

    public function subCategoria()
    {
        return $this->belongsTo('App\SubCategoria','CdSubCategoria','CdSubCategoria');
    }

    public function imagens(){
        return $this->hasMany('App\Imagem', 'CdProduto', 'CdProduto');
    }

    public function lotes(){
        return $this->hasMany('App\LoteProduto', 'CdProduto', 'CdProduto');
    }

    public function tipo_produto_embalagem(){
        return $this->belongsTo('App\TipoProdutoEmbalagem', 'CdProduto', 'CdProduto');
    }
    /*
    public $appends = ['count'];
    public function getCountAttribute()
    {
        //return $this->attributes['CdSubCategoria'];
        $result = $this->query()
            ->join('sub_categorias','produtos.CdSubCategoria','=','sub_categorias.CdSubCategoria')
            ->selectRaw('produtos.CdSubCategoria, count(*) c')
            ->groupBy('produtos.CdSubCategoria')
            ->where('produtos.CdSubCategoria', $this->attributes['CdSubCategoria'])
            ->first();
        return $result;
    }
    */
}