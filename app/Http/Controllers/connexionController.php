<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;

class connexionController extends Controller
{
    function acceuil(){
        
        return view('acceuil')->with('erreurs',null);
    } 

    function connecter(){
        
        return view('connexion')->with('erreurs',null);
    } 
    
    function valider(Request $request){
        $login = $request['login'];
        $mdp = $request['mdp'];
        $visiteur = PdoGsb::getInfosVisiteur($login,$mdp);
        
        if(!is_array($visiteur) ){
            $erreurs[] = "Login ou mot de passe incorrect(s)";
            return view('connexion')->with('erreurs',$erreurs);
        }
        
        else {
            if ($visiteur['poste']==2){
                session(['visiteur' => $visiteur]);
                return view('sommaireG')->with('visiteur',session('visiteur'));
            }
            else
            {
                session(['visiteur' => $visiteur]);
                return view('sommaire')->with('visiteur',session('visiteur'));
                
            }  
        }
    } 

    function deconnecter(){
            session(['visiteur' => null]);
            return redirect()->route('chemin_connexion');      
    }
       
}