<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\EmpresaFuncaoRequest;
use App\Http\Requests;
use App\Models\Author;
use App\Models\EmpresaFuncao;
use App\Produto;
use App\SubCategoria;
use Illuminate\Http\Request;

class EmpresaFuncaoController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) return view('empresafuncao');
        if ($request->isMethod('post')) {
            var_dump($request->data);
            //return strtotime($request->data);
        }
        /*
        `booksauthors`.`authorid` as `pivot_authorid`,
        `booksauthors`.`bookid` as `pivot_bookid`,
        `booksauthors`.`quant` as `pivot_quant`,
        `booksauthors`.`value` as `pivot_value`


        $a = Author::where('id', 1);


        $authors = Author::with(['book'])->get();

        for($i = 0; $i < count($authors); $i++)
        {
            $authors[$i]['soma'] = 0;
            foreach ($authors[$i]['book'] as $v):
                $authors[$i]['soma'] += ((float)$v['pivot']['value'] * (int)$v['pivot']['quant']);
            endforeach;
        }

        var_dump($authors->toArray());
        return;

        return \DB::table("empresafuncao")
            ->where('empresa_id','>', 1)
            ->paginate(15);*/
        //return view('empresafuncao');
        /*
        $p = new Produto();
        $s = new SubCategoria();
        $c = new Categoria();
        return $c->join('sub_categorias','sub_categorias.CdCategoria','=','categoria.CdCategoria')
                 ->join('produtos','produtos.CdSubCategoria','=','sub_categorias.CdSubCategoria')
                 ->selectRaw('categoria.CdCategoria,categoria.NmCategoria, count(*) count_produto_categoria')
                 ->groupBy(['categoria.CdCategoria','categoria.NmCategoria'])
                 ->get()->toJson(JSON_PRETTY_PRINT);
       */
    }

    public function store(EmpresaFuncaoRequest $request)
    {

        return $request->all();
    }
}

/*
SELECT c.CdCategoria,
       c.NmCategoria,
       count(*)
FROM categoria C
INNER JOIN sub_categorias s on c.CdCategoria = s.CdCategoria
INNER JOIN produtos p on p.CdSubCategoria = s.CdSubCategoria
GROUP BY c.CdCategoria,c.NmCategoria
*/