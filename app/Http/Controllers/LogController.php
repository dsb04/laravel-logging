<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function soma(Request $resquest)
    {
    $result=$resquest->num1+$resquest->num2;
    logger()->info('Soma feita');
    return $result;
    }

}
