<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contenus;
use Illuminate\Support\Facades\DB;

class ContenusController extends Controller
{
    //
    public function index(){
        $contenus = Contenus::all();
        return view("welcome", compact("contenus"));
    }

    public function moreInfo(Request $request){
        $idContenu = $request->route('idContenu');
        $contenu = Contenus::find($idContenu);
        return view("infoContenu", compact("contenu", "idContenu"));
    }

    public function verifyLogin(Request $request){
        $email = $request->input('email');
        $mdp = $request->input('mdp');

        // $admin = Admin::where('email')->first();
        $admin = DB::table('admin')->where('email', $request->input('email'))->first();
        if ($admin && $mdp === $admin->mdp) {
            session()->put('idAdmin', $admin->id);
            return redirect()->route('accueil')->with('idAdmin', $admin->id);
        } else if (!$admin && !$mdp) {
            $errorMessage = 'L\'email et le mot de passe sont incorrects';
        } else if (!$admin) {
            $errorMessage = 'L\'email est incorrect';
        } else {
            $errorMessage = 'Le mot de passe est incorrect';
        }
        return redirect()->back()->withErrors(['email' => $errorMessage]);
    }
}
