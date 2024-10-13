<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{

public function jidlo()
{
    return view('jidlo');
}

public function kultura()
{
    return view('kultura');
}

public function ostatni()
{
    return view('ostatni');
}

public function popkultura()
{
    return view('popkultura');
}

public function cestovatelsketipy()
{
    return view('cestovatelsketipy');
}

public function vylety()
{
    return view('vylety');
}

}
