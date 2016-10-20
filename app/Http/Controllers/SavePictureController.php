<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;


class SavePictureController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view('pictures');
    }

    /**
     * @param Request $request
     * @param Pictures $model
     * @return mixed
     */
    public function store(Request $request, Pictures $model)
    {

        if ($request->file('picture'))
        {
            $p = $request->file('picture');
            $newModel = $model->create([
                        'name' => 'pic_'.uniqid(),
                        'mimetype' => $p->getClientMimeType(),
                        'extension' => $p->extension(),
                        'length' => $p->getClientSize(),
                        'state' => 1
            ]);
            echo $p->storeAs('images', $newModel->name);
            //move_uploaded_file($_FILES['picture']['tmp_name'],'images/0001.jpg');
        }
        return redirect()
            ->route('pictures.index');
    }
}