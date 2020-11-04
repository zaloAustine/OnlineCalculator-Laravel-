<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    //

    function basicCalculation(Request $request){
        $firstNumber = $request->firstNumber;
        $secondNumber = $request->secondNumber;
        $operator = $request->operator;

        // 0 add 1 sub
        if($operator == 0){

            $result = $firstNumber + $secondNumber;
            $array = array(
                "result" => "your result is  ".$result,
                "message" => "Succesfully calculated",
                "code" => "200"
            );

            return response()->json($array,200);

        }else if($operator == 1){

            $result = $firstNumber - $secondNumber;
            $array = array(
                "result" => "your result is".$result,
                "message" => "Succesfully calculated",
                "code" => "200"
            );

            return response()->json($array,200);

        }else{


            return response()->json("Failed",404);
        }



    }
}
