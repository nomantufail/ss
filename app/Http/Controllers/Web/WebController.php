<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Responses\Responses\WebResponse;

class WebController extends Controller
{
    public $response;
    public function __construct()
    {
        $this->response = new WebResponse();
    }
}
