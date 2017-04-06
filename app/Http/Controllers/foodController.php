<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class foodController extends Controller
{
    //

    public function DailySpecial (){

    	$day = date('N');
    	$prato = \App\foodModel::where('id', $day)->get();
    	echo $prato->prato;
    }

    public function AdicionaPrato () {
    	
    	//essa parte do código abaixo é apenas temporária. devo colocar dois valores únicos na tabela: login e email
    	//estes vão ser usados para autenticar nessa variável abaixo
    	$auth = \App\pessoasModel::find('olar');


    	if (!$auth->permition) {
    		return ("você não tem permição para acessar esta página");
    	}
    	else {
    		$pratos = \App\foodModel::all();
    		return view('addPrato',['pratos'=>$pratos]);
    	}
    }
}
