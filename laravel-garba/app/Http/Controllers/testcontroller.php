<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
 
{
    public function store(Request $request)
    {
       // dd($request);

      $verif = $request -> validate([
            'nom'=>'required|nom',
            'prenom'=>'required|prenom',
            'gmail'=>'required|gmail',
            'genre'=>'required|genre',
            'numero'=>'required|numero',
            'personne'=>'required|personne'
        ]);

            if($verif){
             echo 'verification passé';
           }

        return redirect()->back();
    }

    public function accueil()
    {
        $userName = 'GARBA';
        return view('accueil', [
            'name' => $userName,
             'age' => 21
        ]);
    }

    public function inscription()
    {
        $userName = 'GARBA';
        return view('inscription', [
            'name' => $userName,
             'age' => 21
        ]);
    }

    public function liste()
    {
        $userName = 'GARBA';
        return view('liste', [
            'name' => $userName,
             'age' => 21
        ]);
    }

    public function method($userName)
    {
        return 'Bonjour' .$userName;
    }

    public function exemple()
    {
        return 'le fameux exemple';
    }

    
}