<div >
      <h1 class="tulisan1"><br><br>Receipt</h1>
      <h3 class="sumfontstruk m-auto"><br>TRETION</h3>
       {{-- struk --}}
       @foreach ($alamat as $alamat)
          <div>{{ $alamat->alamat }}</div>
          <div>{{ $alamat->kode_pos }}</div> 
        @endforeach
        <h4 class="sumfontstruk m-auto"><br>tretion.@gmail.com</h4>
        <h3 class="sumfontstruk m-auto"><br>089652036910</h3>

       <div class="sumfont2">
        <table class="table table-striped table-sm">
            <small class="fontsize">
                <tr>
                    <th class="fontsize" scope="col">Nama Menu</th>
                    <th class="fontsize" scope="col">Harga Menu</th>
                    <th class="fontsize" scope="col">QTY</th>
                    <th class="fontsize" scope="col">Sub Total</th>
                </tr>
                @php
                $bayar=0
                @endphp
                @foreach ($order as $order)
                @php
                $total = $order["harga_menu"] * $order["qty"]
                @endphp
                <tr>
                    <td class="fontsize">{{ $order->nama_menu }}</td>
                    <td class="fontsize">{{ $order->harga_menu }}</td>
                    <td class="fontsize">{{ $order->qty}}</td>
                    <td class="fontsize">{{ ($total)}}</td>  
                </tr>
                @php
                $bayar += $total;
                @endphp
                @php
                $ppn= (10 * $bayar)/100
                @endphp
                @php
                $totalbayar=0  
                @endphp
                @php
                $totalbayar= $bayar + $ppn
                @endphp
                @endforeach
                <tr>
                    <th class="fontsize" colspan="4"> =============================== Total Belanja ==============> {{ $bayar }}</th>
                </tr>
                <tr>
                    <th class="fontsize" colspan="4"> ================================== PPN 10% ===============> {{$ppn }}</th>
                </tr>
                <tr>
                    <th class="fontsize" colspan="4"> =============================== Belanja Anda =============> {{$totalbayar }}</th>
                </tr>
            </small>
        </table>
        

       {{-- end struk --}}
    </div>
   
</div>
<a href="/waiter"> <button class="close">Close</button></a>