<?php

namespace App\Http\Controllers;

use App\Models\Creditos;
use App\Models\Noticias;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public  function index()
    {
        //$user = User::find(1);
        //$user->password = \Hash::make('123456');
        //$user->save();
        //var_dump(\Auth::user());
        //return "a";
        /*$not = new Noticias();

        $a = new Collection([]);

        //var_dump( DB::table('creditos')->get() );
        //return;
        
        return $not->with(['credito'=> function($query){
            return $query->orderBy('ordem', 'asc');
        }])
            ->select('noticias.*')
            ->get()
            ->sortBy(function($p1,$p2)
            {
                $a = $p1->credito->ordem;
                $b = $p2->credito->ordem;
                return $a == $b ? 0: ($a > $b ? 1 : -1);
            }, SORT_REGULAR, true)
            ->toJson(JSON_PRETTY_PRINT);



        $d = new Creditos();
        $d->setConnection(Auth::user()->database);
        */
        return view('agenda');
    }
}
/*
return $not->with(['credito'=> function($query){
    return $query->orderBy('ordem', 'asc');
}])
    ->leftJoin('creditos', "creditos.id","=","noticias.creditoid")
    ->orderBy('creditos.ordem')
    ->select('noticias.*')
    ->get()
    ->toJson(JSON_PRETTY_PRINT);*/