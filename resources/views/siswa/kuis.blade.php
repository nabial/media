@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h3>Kuis</h3>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Kuis</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <form action="{{route('simpanjawaban')}}" method="post">
          {{ csrf_field()}}

        <!-- soal 1 -->
        <div class="col-md-12">
          <div class="box-kuis">
            <div class="box1">
              <div class="row">
                <div class="col-md-1">
                  <p class="nomor">1.</p>
                </div>
                <div class="col-md-10">
                  <p>Jenis routing yang dilakukan secara otomatis sesuai dengan pengaturan yang dibuat adalah ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_1" value="A" >Routing statis</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_1" value="B" >Routing protokol</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_1" value="C" >Routing dinamis</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_1" value="D" >Routing tables</label>
              </div>
            </div>
        </div>

        <!-- soal 2 -->
        <div class="col-md-12">
          <div class="box-kuis2">
            <div class="box1">
              <div class="row">
                <div class="col-md-1">
                  <p class="nomor">2.</p>
                </div>
                <div class="col-md-10">
                  <p>Berikut jenis-jenis dari routing dinamis, Kecuali ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_2" value="A" >RIP (Routing Information Protocol)</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_2" value="B" >OSPF (Open Shortest Path First)</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_2" value="C" >BGP (Border Gateway Protokol)</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_2" value="D" >GRPI (Gateway Routing Protokol Internal)</label>
              </div>
            </div>
        </div>

        <!-- soal 3 -->
        <div class="col-md-12">
          <div class="box-kuis3">
            <div class="box1">
              <div class="row">
                <div class="col-md-1">
                  <p class="nomor">3.</p>
                </div>
                <div class="col-md-10">
                  <p>Kekurangan dari routing dinamis adalah ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_3" value="A" >Kecepatan pengenalan dan kelengkapan IP Table terbilang lama</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_3" value="B" >Administrasi cukup rumit</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_3" value="C" >Banyak router yang harus dikonfigurasi secara manual</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_3" value="D" >Router secara otomatis berbagi informasi</label>
              </div>
            </div>
        </div>

        <!-- soal 4 -->
        <div class="col-md-12">
          <div class="box-kuis">
            <div class="box1">
              <div class="row">
                <div class="col-md-1" class="no">
                  <p class="nomor">4.</p>
                </div>
                <div class="col-md-10">
                  <p>Jenis Routing protocol yang hanya bisa digunakan sesama router CISCO saja dan tidak didukung dalam jenis router yang lain adalah ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_4" value="A" >RIP</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_4" value="B" >OSPF</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_4" value="C" >EIGRP</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_4" value="D" >AS</label>
              </div>
            </div>
        </div>

        <!-- soal 5 -->
        <div class="col-md-12">
          <div class="box-kuis2">
            <div class="box1">
              <div class="row">
                <div class="col-md-1">
                  <p class="nomor">5.</p>
                </div>
                <div class="col-md-10">
                  <p>Kepanjangan dari routing protocol AS ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_5" value="A" >Anonymus system</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_5" value="B" >Advantage System</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_5" value="C" >Autonomous System</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_5" value="D" >Already System</label>
              </div>
            </div>
        </div>

        <!-- soal 6 -->
        <div class="col-md-12">
          <div class="box-kuis3">
            <div class="box1">
              <div class="row">
                <div class="col-md-1">
                  <p class="nomor">6.</p>
                </div>
                <div class="col-md-10">
                  <p>Perbedaan RIPversi1 dan RIPversi2 adalah ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_6" value="A" >RIPv1 hanya mendukung routing class-full sedangkan RIPv2 mendukung routing class-full dan class-le</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_6" value="B" >RIPv1 mendukung VLSM (Variabel Length Subnet Mask) sedangkan RIPv2 tidak mendukung VLSM (Variabel Length Subnet Mask </label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_6" value="C" >RIPv1 mendukung routing class-full dan class-less sedangkan RIPv2 hanya mendukung routing class-full</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_6" value="D" >RIPv1 terdapat fitur perbaikan routing multicast sedangkan RIPv2 terdapat fitur perbaikan routing broadcast</label>
              </div>
            </div>
        </div>

        <!-- soal 7 -->
        <div class="col-md-12">
          <div class="box-kuis">
            <div class="box1">
              <div class="row">
                <div class="col-md-1">
                  <p class="nomor">7.</p>
                </div>
                <div class="col-md-10">
                  <p>OSPF menggunakan algoritma apa ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_7" value="A" >algoritma advance state</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_7" value="B" >algoritma distance vector</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_7" value="C" >algoritma advance vector</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_7" value="D" >algoritma link state</label>
              </div>
            </div>
        </div>

        <!-- soal 8 -->
        <div class="col-md-12">
          <div class="box-kuis2">
            <div class="box1">
              <div class="row">
                <div class="col-md-1">
                  <p class="nomor">8.</p>
                </div>
                <div class="col-md-10">
                  <p>Jenis routing protokol yang biasa digunakan antara ISP dengan ISP dan atau antara client dengan client lainnya adalah ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_8" value="A" >AS</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_8" value="B" >BGP</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_8" value="C" >RIP</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_8" value="D" >EIGRP</label>
              </div>
            </div>
        </div>

        <!-- soal 9 -->
        <div class="col-md-12">
          <div class="box-kuis3">
            <div class="box1">
             <div class="row">
                <div class="col-md-1">
                  <p class="nomor">9.</p>
                </div>
                <div class="col-md-10">
                  <p>Perhatikan ciri-ciri berikut</p>
                    <ol style="font-size: 15px;">
                      <li>Cocok untuk area besar atau luas</li>
                      <li>Routing tabel dibuat statis</li>
                      <li>Router secara otomatis berbagi informasi</li>
                      <li>Tidak perlu mengetahui semua alamat network yang ada</li>
                      <li>Administrator ikut campur tangan</li>
                    </ol>
                  <p>Kelebihan routing dinamis dijelaskan oleh nomor ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_9" value="A" >1, 2, 4</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_9" value="B" >3, 4, 5</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_9" value="C" >2, 3, 5</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_9" value="D" >1, 3, 4</label>
              </div>
            </div>
        </div>

        <!-- soal 10 -->
        <div class="col-md-12">
          <div class="box-kuis">
            <div class="box1">
              <div class="row">
                <div class="col-md-1">
                  <p class="nomor">10.</p>
                </div>
                <div class="col-md-10">
                  <p>Apa saja mekanisme routing pada AS ?</p>
                </div>
              </div>
            </div>
          </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_10" value="A" >Intradomain routing & Intredomain routing</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_10" value="B" >ASversi1 & ASversi2</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_10" value="C" >Distance vector & Advance vector</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_10" value="D" >Link-State protocol dan Distance Vector protocol</label>
              </div>
            </div>
        </div>

        <!-- submit -->
        <div class="content">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="position: center">
              <button class="submit">Kirim <i class="fa fa-arrow-circle-right"></i></button>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
            
      </form>
      </div>
    </section>
@endsection
