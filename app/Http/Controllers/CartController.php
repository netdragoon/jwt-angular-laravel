<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    public function atualizaQtd(Request $request)
    {
        $rel = $request->get('rel');
        $id  = $rel['id'];
        $qtd = $rel['qtd'];
        return $id.'-'.$qtd;
    }
}
