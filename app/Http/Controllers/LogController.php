<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function soma(Request $request)
    {
    $result=$resquet->num1+$request->num2;
    logger()->info('Soma feita');
    return $result;
    }
    public function sub(Request $request)
    {
      $num1=$request->num1;
      $num2=$request->num2;
      $sub=$num1-$num2;
        logger()->debug('Sub feita', ['num1' => $num1, 'num2' => $num2, 'sub' => $sub]);
        return $sub;
    

    }
    public function div(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        if ($num2==0){
            logger()->error('Divisor zero!');
            return false;
        }
        $div = $num1 / $num2;
        logger()->info('Div feita');
        return $div;

    }
    public function mult(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        if($num1<0||$num2<0){
            logger()->warning('Negativo');
        }
        $div = $num1 * $num2;
        return $div;
    }
}
