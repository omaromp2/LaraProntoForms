<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use omaromp2\laraprontoforms\ProntoForms;

class ProntoController extends Controller
{
    //
    public function test()
    {
        # Metodo para llamar a ProntoForms...

        $questions = ['ShipNumber' => '123' , 'OrderNumber' => '123', 'name' => 'Omar Ponce'];

        return ProntoForms::sendform($questions);
    }
}
