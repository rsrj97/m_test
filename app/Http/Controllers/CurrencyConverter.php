<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyConverter extends Controller
{
    public function index() {
        $api_link = Config('constant.api_link');
        echo $api_link;
        $api_key = Config('constant.api_key');
    }
}
