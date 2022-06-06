<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // START USERS CONTROLLER
    public function dataUsers(){
        if(auth()->check()){
            $users = User::all();
            return view('admin.admin_users', ['title' => 'Data Users'])->with('users', $users);
        }
        else{
            return view('errors.404');
        }
    }
    public function tambahDataUsers(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return redirect('/users');
    }
    public function ubahDataUsers(Request $request){
        $id = $request['user_id'];
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $user = User::whereId($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return redirect('/users');
    }
    public function hapusDataUsers(Request $request){
        $id = $request['user_id'];
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users');
    }
    // END USERS CONTROLLER

    // START DATA MURID CONTROLLER
    public function dataMurid(){
        if(auth()->check()){
            $i = 0;
            $cabang = [];
            $murids = Murid::all()->sortByDesc('created_at');
            foreach($murids as $murid){
                $cabang[$i] = Cabang::find($murid->id_cabang);
                $i++;
            }
            return view('admin.admin_data_murid', ['title' => 'Data Murid'])
            ->with('murids', $murids)
            ->with('cabang', $cabang);
        }
        else{
            return view('errors.404');
        }
    }
    public function tambahDataMurid(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);
        return redirect('/users');
    }
    public function ubahDataMurid(Request $request){
        $id = $request['user_id'];
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $user = User::whereId($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);
        return redirect('/users');
    }
    public function hapusDataMurid(Request $request){
        $id = $request['user_id'];
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users');
    }
    // END DATA MURID CONTROLLER
}
