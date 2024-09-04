<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public function index(){
        return view('dashboard.admin.tambahmenu', [
            'title' => 'AdminCreate'
        ]);
    }
    

    public function store(Request $request){

        $validatedData = $request->validate([
            'kode_menu' =>'required|max:255|unique:menus',
            'nama_menu' =>'required|max:255|unique:menus',
            'harga' =>'required|max:255',
            
            
        ]);
        
 
        Menu::create($validatedData);
        $request->session()->flush('success','Berhasil');
        return redirect('dashboard');
       
 
     }

    

     
}


