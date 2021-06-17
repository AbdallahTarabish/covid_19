<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $model;
    protected $request;

    public function index()
    {
        return $this->model->all();
    }
    public function show($id)
    {
        return $this->model->find( $id);
    }


    public function store()
    {
        $this->model->create($this->requestValidation());
        return redirect()->back();
    }

    public function requestValidation() {
        return app($this->request)->all();
    }

    public function update($id)
    {
        $model = $this->model->findOrFail($id);
        $model->update($this->requestValidation());
        $model->save();
    }
}
