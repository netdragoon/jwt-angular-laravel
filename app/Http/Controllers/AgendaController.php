<?php

namespace App\Http\Controllers;

use App\Models\Creditos;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{

    public function __construct()
    {
    }

    public  function index()
    {
        $d = new Creditos();
        $d->setConnection(Auth::user()->database);
        return view('agenda');
    }
}
