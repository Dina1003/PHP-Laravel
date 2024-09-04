<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Detail_Transaksi;
use App\Models\Restok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    
    public function index(){

        $data=Transaksi::all();
        $menu=Menu::all();
        $barang=Barang::all();
        $restok= Restok::all();
        $detail = Detail_Transaksi::all();
        return view('Dashboard.dashboard', compact('data', 'menu', 'barang', 'restok', 'detail'));
      
        
        // $data = DB::table('transaksis')->get();
        // $bar = DB::table('menus')->get();
        // $bara = DB::table('menus')->get();
        // return view('Dashboard.dashboard', ['data'=> $data], ['bar'=> $bar], ['bara'=> $bara]);  
    }



    public function destroy($id){
        $menu = Menu::find($id);
        $menu->delete();
        // return redirect('dashboard');
        // $barang = Barang::find($id);
        // $barang->delete();
        // return redirect('dashboard');
        // $restok = Restok::find($id);
        // $restok->delete();
        return redirect('dashboard');
    }
    
    
   

    
}
