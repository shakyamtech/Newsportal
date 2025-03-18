<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherController extends BaseController
{
    public function pageNotFound() {
        return view('404page');
    }
}
