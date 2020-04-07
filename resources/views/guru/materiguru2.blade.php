@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Konsep routing dinamis</h2>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="subbab"><i class="fa fa-pie-chart"></i> Materi</a></li>
                    <li class="active">Konsep routing dinamis</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
      <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Konsep Routing dinamis</a></li>
              <li><a href="#timeline" data-toggle="tab">Jenis Routing</a></li>
              <li><a href="#settings" data-toggle="tab">Kelebihan & Kekurangan</a></li>
            </ul>
            <div class="tab-content">
<!-- tab 1 -->
              <div class="active tab-pane" id="activity">
                <div class="post">
                  <div class="row">
                    <div class="col-md-10">
                      <div class="teks-materi">
                        <p>Routing dinamis bekerja untuk menemukan seluruh jaringan yang ada dalam subnet, dan routing ini selalu melakukan update network pada routing table, sehingga ketika ada masalah (trouble) atau ada jaringan yang terputus bisa dapat terdekteksi langsung tanpa harus dicek satu persatu.</p>
                        <p>Routing dinamis adalah <b> routing yang dilakukan oleh router dengan cara membuat jalur komunikasi data secara otomatis sesuai dengan pengaturan yang dibuat.</b> Jika ada perubahan topologi di dalam jaringan, maka router akan otomatis membuat jalur routing yang baru. Routing dinamis ini berada pada lapisan network layer jaringan komputer dalam TCP/IP Protocol Suites.</p>
                        <p><b>Ciri-ciri routing dinamis</b> sebagai beriku :
                          <ul>
                            <li>Router berbagi informasi routing secara otomatis</li>
                            <li>Jumlah gateway sangat banyak</li>
                            <li>Routing tabel dibuat secara dinamik</li>
                            <li>Membutuhkan protokol routing (contohnya RIP ,OSPF, BGP, EIGRP, AS )</li>
                          </ul>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-2">
                     
                    </div>
                  </div>
                  
                </div>
              </div>
<!-- tab 1 -->

<!-- tab 2 -->
              <div class="tab-pane" id="timeline">
                <ul class="timeline timeline-inverse">
                  <li class="time-label">
                        <span class="bg-teal">
                          jenis routing dinamis
                        </span>
                  </li>
                  <li>
                    <i class="fa fa-bookmark-o bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><b>RIP</b> - Routing Information Protocol </h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa fa-bookmark-o bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><b>OSPF</b> - Open Short Path First</h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa fa-bookmark-o bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><b>BGP</b> - Border Gateway Protocol</h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa fa-bookmark-o bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><b>EIGRP</b> - Enhanced Interior Gateway Routing Protocol</h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa fa-bookmark-o bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"> <b>AS</b> - Autonomous System</h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
<!-- tab 2 -->

<!-- tab 3 -->
              <div class="tab-pane" id="settings">
                <ul class="timeline timeline-inverse">
                  <li class="time-label">
                        <span class="bg-teal">
                          kelebihan routing dinamis
                        </span>
                  </li>
                  <li>
                    <i class="fa fa-plus bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"> <b> Kelebihan menggunakan routing dinamis</b> </h3>
                      <div class="timeline-body">
                        <ul>
                          <li>Cocok untuk area besar/luas</li>
                          <li>Hanya mengenalkan alamat yang terhubung langsung dengan routernya</li>
                          <li>Bila terjadi penambahan suatu network baru tidak perlu semua router dikonfigurasi, hanya router yang berkaitan saja</li>
                          <li>Router secara otomatis berbagi informasi</li>
                          <li>Routing table dibuat secara dinamik</li>
                          <li>Tidak perlu mengetahui semua alamat network yang ada</li>
                          <li>Administrator tidak ikut campur tangan</li>
                        </ul>
                      </div>
                    </div>
                  </li>

                  <li class="time-label">
                        <span class="bg-teal">
                          kekurangan routing dinamis
                        </span>
                  </li>
              
                  <li>
                    <i class="fa fa-minus bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"> <b>Kekurangan routing dinamis</b></h3>
                      <div class="timeline-body">
                        <ul>
                          <li>Beban kerja router menjadi lebih berat karena selalu memperbarui IP Table pada setiap waktu tertentu</li>
                          <li>Kecepatan pengenalan dan kelengkapan IP Table terbilang lama karena router membroadcast ke semua router lainnya sampai ada yang cocok sehingga setelah konfigurasi harus menunggu beberapa saat agar setiap router mendapat semua alamat IP yang ada</li>
                        </ul>
                        <p></p>
                        <b>Bagaimana ?</b>
                        <div class="row">
                          <div class="col-md-3">
                            <button type="button" class="btn btn-block btn-social btn-warning" id="btn-normal" data-toggle="modal" data-target="#modal-warning"> <i class="fa fa-long-arrow-right"></i>
                              Sudah faham ?
                            </button>
                          </div>
                          <div class="col-md-3"></div>
                          <div class="col-md-3"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
<!-- button pop up -->
                <div class="modal modal-warning fade" id="modal-warning">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Sudah faham? </h4>
                      </div>
                      <div class="modal-footer">
                        <a href="materiguru2"><button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Belum, Baca konsep routing dinamis lagi</button></a>
                        
                        <a href="materiguru3"><button type="button" class="btn btn-outline"> Sudah, Aku mau baca materi selanjutnya</button></a>
                      </div>
                      <div class="modal-body">
                        <p>Semangat ya &hellip;</p>
                      </div>
                    </div>
                  </div>
                </div>
<!-- button pop up -->
              </div>
<!-- tab 3 -->

            </div>
          </div>
        </div>
    </div>
        
    </section>
@endsection
