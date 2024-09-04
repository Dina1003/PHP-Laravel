<?php

namespace Database\Seeders;

use App\Models\alamat_cafe;
use App\Models\Barang;
use App\Models\Cafe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pengguna;
use App\Models\Menu;
use App\Models\Detail_Transaksi;
use App\Models\Transaksi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        alamat_cafe::create([
            'kode_pos'=>'25162',
            'alamat'=>'Jl Moh Hatta, Pasar Baru, Cupak Tangah, Pauh, Kota Padang, Prov. Sumatera Barat',
            'kota'=>'Padang'
        ]);
        
        // Cafe::create([
        //     'id_cafe'=>'TR1003',
        //     'nama_cafe'=>'TRETION',
        //     'kode_pos'=>'25162'
        // ]);
    //    Transaksi::create([
    //        'detail__transaksis_id'=> '1',
    //        'kode_transaksi'=>'vr2516',
    //        'id_cafe'=>'12',
    //        'tanggal' =>'30/05/2022',
    //        'total_transaksi' =>'200000',
    //    ]);
    //    Transaksi::create([
    //     'detail__transaksis_id'=> '2',
    //     'kode_transaksi'=>'vr2517',
    //     'id_cafe'=>'12',
    //     'tanggal' =>'30/05/2022',
    //     'total_transaksi' =>'100000',
    // ]);
    // Transaksi::create([
    //     'detail__transaksis_id'=> '2',
    //     'kode_transaksi'=>'vr2517',
    //     'id_cafe'=>'12',
    //     'tanggal' =>'30/05/2022',
    //     'total_transaksi' =>'300000',
    // ]);
       Menu::create([
        'kode_menu'=>'IAM02',
        'nama_menu'=>'Ice Americano',
        'harga' =>'26000'
    ]);
       Menu::create([
        'kode_menu'=>'IMC03',
        'nama_menu'=>'Ice Mocchachino',
        'harga' =>'20000'
    ]);
       Menu::create([
        'kode_menu'=>'BRS001',
        'nama_menu'=>'Burger Special',
        'harga' =>'30000'
    ]);
       Menu::create([
        'kode_menu'=>'ICT005',
        'nama_menu'=>'Ice Tea',
        'harga' =>'15000'
    ]);
    

       
    //    Detail_Transaksi::create([
    //     'transaksi_id'=>'1',
    //     'kode_menu'=>'ICL01',
    //     'qty' =>'4'
    // ]);
    // Detail_Transaksi::create([
    //     'transaksi_id'=>'2',
    //     'kode_menu'=>'IAM02',
    //     'qty' =>'3'
    // ]);
    // Detail_Transaksi::create([
    //     'transaksi_id'=>'3',
    //     'kode_menu'=>'IMC03',
    //     'qty' =>'2'
    // ]);

    Barang::create([
        'kode_barang'=>'wt001',
        'nama_barang'=>'Wortel',
        'jumlah_barang'=>'100',
        'harga_barang' =>'10000'
    ]);
    Barang::create([
        'kode_barang'=>'cba001',
        'nama_barang'=>'Cabai Merah',
        'jumlah_barang'=>'100',
        'harga_barang' =>'10000'
    ]);

    Barang::create([
        'kode_barang'=>'TB2001',
        'nama_barang'=>'Tora Bika',
        'jumlah_barang'=>'100',
        'harga_barang' =>'5000'
    ]);

    Barang::create([
        'kode_barang'=>'IN231',
        'nama_barang'=>'Indomilk',
        'jumlah_barang'=>'100',
        'harga_barang' =>'10000'
    ]);
    Barang::create([
        'kode_barang'=>'EBT100',
        'nama_barang'=>'Es Batu',
        'jumlah_barang'=>'200',
        'harga_barang' =>'3000'
    ]);
    Barang::create([
        'kode_barang'=>'BLC154',
        'nama_barang'=>'Kopi Hitam',
        'jumlah_barang'=>'10',
        'harga_barang' =>'50000'
    ]);




    }
}
