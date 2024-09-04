<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Symfony\Component\Console\Command\DumpCompletionCommand;

class AdminEditMController extends Controller
{
    public function index(){
        $menu=Menu::all();
        return view('dashboard.admin.editmenu', compact('menu'));
    }

    public function edit($id){
        $menu = Menu::find($id);
       return view('dashboard.admin.editmenu', compact(['menu']));
    }
    // public function update($id, Request $request){
    //     $menu = Menu::find($id);
    //     $menu->update($request->except(['_token', 'submit']));
    //     return redirect('/dashboard');

    // }

    public function updatestok(Request $request, $id){

        $menu = Menu::find($id);
        $menu->update($request->all());

        return redirect('/dashboard');  
    }
    
    
   

   
}
