<?php

namespace App\Http\Controllers;

use App\Models\Models\Artical;
use Illuminate\Http\Request;

class ArticalController extends MainController
{

    protected $request = "App\Http\Requests\ArticalRequest";

    public function __construct(Artical $artical)
    {
        $this->model = $artical;
    }



}
