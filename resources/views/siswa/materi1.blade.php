@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Konsep routing dinamis</h2>
                <ol class="breadcrumb">
                    <li><a href="dashsiswa"><i class="fa fa-home"></i> Home</a></li>
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
                    <div class="col-md-8">
                      <p>Routing dinamis adalah routing yang dilakukan oleh router dengan cara membuat jalur komunikasi data secara otomatis sesuai dengan pengaturan yang dibuat. Jika ada perubahan topologi di dalam jaringan, maka router akan otomatis membuat jalur routing yang baru. Routing dinamis ini berada pada lapisan network layer jaringan komputer dalam TCP/IP Protocol Suites.</p>
                      <p>ciri ciri dynamic routing adalah
                        <ul>
                          <li>Router berbagi informasi routing secara otomatis</li>
                          <li>Jumlah gateway sangat banyak</li>
                          <li>Routing tabel dibuat secara dinamik</li>
                          <li>Membutuhkan protokol routing (contohnya RIP ,OSPF, dll )</li>
                        </ul>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <img src="admin_lte/dist/img/banner_img.png" width="300">
                    </div>
                  </div>
                  
                </div>
              </div>
<!-- tab 1 -->

<!-- tab 2 -->
              <div class="tab-pane" id="timeline">
                <ul class="timeline timeline-inverse">
                  <li class="time-label">
                        <span class="bg-yellow">
                          jenis routing dinamis
                        </span>
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="materi2">RIP</a> Routing Information Protocol </h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa fa-user bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="materi2">OSPF</a> Open Short Path First</h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa fa-comments bg-yellow"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="materi2">BGP</a> Border Gateway Protocol</h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa fa-envelope bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="materi2">EIGRP</a> Enhanced Interior Gateway Routing Protocol</h3>
                      <div class="timeline-body">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa fa-envelope bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="materi2">AS</a> Autonomous System</h3>
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
                        <span class="bg-yellow">
                          kelebihan routing dinamis
                        </span>
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"> Kelebihan menggunakan routing dinamis </h3>
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
                        <span class="bg-yellow">
                          kekurangan routing dinamis
                        </span>
                  </li>
              
                  <li>
                    <i class="fa fa-camera bg-purple"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"> Kekurangan routing dinamis</h3>
                      <div class="timeline-body">
                        <ul>
                          <li>Beban kerja router menjadi lebih berat karena selalu memperbarui IP Table pada setiap waktu tertentu</li>
                          <li>Kecepatan pengenalan dan kelengkapan IP Table terbilang lama karena router membroadcast ke semua router lainnya sampai ada yang cocok sehingga setelah konfigurasi harus menunggu beberapa saat agar setiap router mendapat semua alamat IP yang ada</li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
<!-- button pop up -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title" style="text-align: center;">Bagamimana ?</h3>
                      </div>
                      <div class="box-body">
                        <button type="button" class="btn btn-danger" id="btn-materi1" data-toggle="modal" data-target="#modal-danger">
                          Apakah kamu sudah memhami konsep materi Routing Dinamis ?
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                 <!--  <button type="button" class="btn btn-danger" id="btn-materi1" data-toggle="modal" data-target="#modal-danger">
                  Apakah kamu sudah memhami konsep materi Routing Dinamis ?
                  </button> -->

                <div class="modal modal-danger fade" id="modal-danger">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Sudah faham ? </h4>
                      </div>
                      <div class="modal-body">
                        <p>Semangat &hellip;</p>
                      </div>
                      <div class="modal-footer">
                        <a href="materi1"><button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Belum, Baca konsep routing dinamis lagi</button></a>
                        
                        <a href="materi2"><button type="button" class="btn btn-outline"> Sudah, Aku mau baca materi selanjutnya</button></a>
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
