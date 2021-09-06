<?php

namespace App\Http\Controllers;

use App\Models\;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formTDD(Request $request)
    {
        // $i = 0;
        // if($request->input('name'))
        // {
        //     echo('bonjour');
        // };
        // while($i < 10)
        // {
        //     $i++;
        //     echo($i);
        // };
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        return view('resultTest', [
            'name'=>$name,
            'email'=>$email,
            'password'=>  $password]);
    }
    public function retriveBDD()
    {
        $customers = Customer::all();
        $products = Product::all();
    }
}

// 200 statut ok 
// 301 Redirection permanante d'url
// 302 Redirection temporaire  d'url 
// 404 pas introuvable 
// 500 erreur interne serveur 