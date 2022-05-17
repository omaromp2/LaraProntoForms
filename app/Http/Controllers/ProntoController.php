<?php

namespace App\Http\Controllers;
use omaromp2\laraprontoforms\ProntoForms;

class ProntoController extends Controller
{
    //
    public function test()
    {
        # Metodo para llamar a ProntoForms...

        $questions = ['ShipNumber' => '12345' , 'OrderNumber' => '678910', 'name' => 'Omar Ponce el Dev'];

        return ProntoForms::sendform($questions);
    }
}
