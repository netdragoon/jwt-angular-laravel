<?php

namespace App\Http\Controllers;

use App\Models\Creditos;
use Illuminate\Http\Request;

class CreditosController extends Controller
{
    private $model;

    public function __construct(Creditos $model)
    {
        $this->middleware('jwt.auth');
        $this->model = $model;
    }

    public function index()
    {
        return response()->json($this->model
            ->all()
            ->toArray());
    }

    public function store(Request $request)
    {
        $result = $this->model->create($request->all());
        if ($result) return $result->toArray();
        return array();
    }

    public function show($id)
    {
        if (is_numeric($id))
        {
            $result = $this->model->find((int)$id);
            if ($result) return $result->toArray();
        }
        return array();
    }

    public function update(Request $request, $id)
    {
        if (is_numeric($id))
        {
            $result = $this->model->find((int)$id);
            if ($result)
            {
                $result->fill($request->except('id'));
                $result->save();
                return $result ;
            }
        }
        return array();
    }

    public function destroy($id)
    {
        if (is_numeric($id))
        {
            $result = $this->model->find((int)$id);
            if ($result)
            {
                return array('status' => $result->delete(), 'description' => 'ok, exclude');
            }
            else
            {
                return array('status' => 2, 'description' => 'no exits');
            }
        }
        return array('status' => 0, 'description' => 'error');
    }
}
