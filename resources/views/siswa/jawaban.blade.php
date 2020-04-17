@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Pembahasan</h2>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Pembahasan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->

    <section class="content">

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4" align="center">
            <div class="small-box bg-yellow">
              <div class="inner">
                <p>Nilai</p>
              </div>
              <div class="inner">
                @foreach($simpanjawaban as $jawaban)
                  <h3>{{$jawaban->score}}</h3>
                @endforeach
              </div>
              <a href="kuis" class="small-box-footer">Ulangi kuis <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>

      <div class="row">
<!-- no 1 -->
        <div class="col-md-12">
          <div class="box-jawaban1">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_1 == 'C')
                      <h4><b class="benar">1. Jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">1. Jawaban kamu salah.</b> Routing yang dilakukan oleh router dengan cara membuat jalur komunikasi data secara otomatis sesuai dengan pengaturan yang dibuat adalah routing dinamis</h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>   

<!-- no 2 -->
        <div class="col-md-12">
          <div class="box-jawaban2">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_2 == 'D')
                      <h4><b class="benar">2. Jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">2. Jawaban kamu salah.</b>RIP, OSPF, BGP adalah jenis routing dinamis, dan GRPI bukan termasuk jenis routing dinamis.</h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>  
      
<!-- no 3 -->
        <div class="col-md-12">
          <div class="box-jawaban3">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_3 == 'A')
                      <h4><b class="benar">3.jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">3. Jawaban kamu salah.</b> Salah satu kekurangan routing dinamis adalah Kecepatan pengenalan dan kelengkapan IP Table terbilang lama, karena router membroadcast ke semua router lainnya sampai ada yang cocok sehingga setelah konfigurasi harus menunggu beberapa saat agar setiap router mendapat semua alamat IP yang ada </h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- no 4 -->
        <div class="col-md-12">
          <div class="box-jawaban1">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_4 == 'C')
                      <h4><b class="benar">4.jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">4. Jawaban kamu salah.</b> EIGRP hanya bisa digunakan sesame router CISCO saja dan routing ini tidak didukung dalam jenis router yang lain </h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- no 5 -->
        <div class="col-md-12">
          <div class="box-jawaban2">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_5 == 'B')
                      <h4><b class="benar">5.jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">5. Jawaban kamu salah.</b>AS merupakan kepanjangan dari Autonomous System </h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>  

<!-- no 6 -->
        <div class="col-md-12">
          <div class="box-jawaban3">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_6 == 'A')
                      <h4><b class="benar">6.jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">6. Jawaban kamu salah.</b>
                        <ul>RIPv1 (RIP versi 1)
                          <li>Hanya mendukung routing class-full</li>
                          <li>Tidak ada info subnet yang dimasukkan dalam data perbaikan routing</li>
                          <li>Tidak mendukung VLSM (Variabel Length Subnet Mask)</li>
                          <li>fitur perbaikan routing broadcast</li>
                        </ul>
                        <ul>RIPv2 (RIP versi 2)
                          <li>mendukung routing class-full dan class-less</li>
                          <li>info subnet dimasukkan dalam data perbaikan routing</li>
                          <li>mendukung VLSM (Variabel Length Subnet Mask)</li>
                          <li>fitur perbaikan routing multicast</li>
                        </ul>
                      </h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- no 7 -->
        <div class="col-md-12">
          <div class="box-jawaban1">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_7 == 'D')
                      <h4><b class="benar">7.jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">7. Jawaban kamu salah.</b>OSPF menggunakan algoritma link state </h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>  

<!-- no 8 -->
        <div class="col-md-12">
          <div class="box-jawaban2">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_8 == 'B')
                      <h4><b class="benar">8.jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">8. Jawaban kamu salah.</b> Protocol BGP biasa digunakan antara ISP dengan ISP dan atau antara client dengan client lainnya </h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>      

<!-- no 9 -->
        <div class="col-md-12">
          <div class="box-jawaban3">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_9 == 'D')
                      <h4><b class="benar">9.jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">9. Jawaban kamu salah.</b>
                        <ul>Berikut beberapa kelebihan routing dinamis:
                          <li>Cocok untuk area besar atau luas</li>
                          <li>Hanya mengenalkan alamat yang terhubung langsung dengan routernya</li>
                          <li>Bila terjadi penambahan suatu network baru tidak perlu semua router dikonfigurasi, hanya router yang berkaitan saja</li>
                          <li>Router secara otomatis berbagi informasi</li>
                          <li>Routing table dibuat secara dinamik</li>
                          <li>Tidak perlu mengetahui semua alamat network yang ada</li>
                          <li>Administrator tidak ikut campur tangan</li>
                        </ul>
                      </h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- no 10 -->
        <div class="col-md-12">
          <div class="box-jawaban1">
            <div class="box1">
              <div class="row">
                <div class="col-md-12">
                  @foreach($simpanjawaban as $jawaban)
                    @if($jawaban->no_10 == 'A')
                      <h4><b class="benar">10.jawaban kamu benar.</b></h4>
                    @else
                      <h4><b class="salah">10. Jawaban kamu salah.</b>Dua mekanisme routing pada AS adalah Intradomain routing & Intredomain routing </h4>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>   

      </div>


    </section>  
@endsection
