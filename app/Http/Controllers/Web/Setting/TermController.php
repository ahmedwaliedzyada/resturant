<?php

namespace App\Http\Controllers\Web\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermController extends Controller
{

    public function index()
    {
        return view('web.settings.terms');
    }


}
