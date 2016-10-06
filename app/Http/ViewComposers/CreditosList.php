<?php

namespace App\Http\ViewComposers;
use App\Models\Creditos;
use Illuminate\Foundation\Application;
use Illuminate\View\View;

class CreditosList
{

    private $model;
    private $app;

    public function __construct(Application $app, Creditos $model)
    {
        $this->model = $model;
        $this->app = $app;
    }

    public function compose(View $view)
    {
        $view->with('count', $this->model->count());
        $view->with('drop', $this->model->pluck('descricao','id'));
    }
}