<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class calculator_controller extends Controller
{
    public function index(){
        return view('CalculatorPerhitungan');
    }

    public function hasilindex(Request$request){
        $angka1 = $request->input('a1');
        $angka2 = $request->input('a2');
        $o = $request->input('o');
        switch($o){
            case'+':
            $operasi = $angka1 + $angka2;
            break;
            case'-':
            $operasi = $angka1 - $angka2;
            break;
            case'*':
            $operasi = $angka1 * $angka2;
            break;
            case'/':
            $operasi = $angka1 / $angka2;
            break;
            }
        return view('HasilCalculator',compact('angka1','angka2','operasi','o'));
    }
}
