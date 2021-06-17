<?php

namespace App\Http\Controllers;

use App\Models\Models\Advice;
use Illuminate\Http\Request;

class AdviceController extends MainController
{
    protected $request = "App\Http\Requests\AdviceRequest";


    public function __construct(Advice $advice)
    {
        $this->model = $advice;
    }

}
