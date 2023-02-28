<?php

namespace App\Http\Controllers;

use App\Mail\FactureMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function indexAdmin(){
        return view('admin');
    }

    public function getUsers(Request $request){
        $user = User::where('cin', $request->cin)->first();
        return view('admin', ['user' => $user]);
    }

    public function UpdateUser(Request $request, $id){
      
        $user = User::find($id);

        $user->montant = $request['montant'];
        $user->montantPaye = $request['montantPaye'];
        $user->permis = $request['permis'];
        
        Mail::to($user->email)->send(new FactureMail($user));
        $user->save();




        return redirect('admin')->withSuccess('Les modifications ont été faites avec succès');
    }

}
