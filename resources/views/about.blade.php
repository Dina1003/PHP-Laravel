@extends('layouts.main')

@section('klp1')
<main class ="d-block text-center ms-4">
    <img src="foto/<?= $image?>" alt="TRETION" width="200">
    <h1><?= $awal?></h1>
    <h1><?= $nama?></h1>
    <h3><?= $kp?></h3>
    <h3><?= $matkul?></h3>
</main>

    @endsection
