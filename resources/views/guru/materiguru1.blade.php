@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Pengenalan routing dinamis</h2>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-home"></i> Home</a></li>
                     <li><a href="subbab"><i class="fa fa-pie-chart"></i> Materi</a></li>
                    <li class="active">Pengenalan routing dinamis</li>
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
              <li class="active"><a href="#timeline" data-toggle="tab">Pengenalan Routing dinamis</a></li>
            </ul>
            <div class="tab-content">

<!-- tab 3 -->
              <div class="active tab-pane" id="timeline">
                <ul class="timeline timeline-inverse">
                  <li>
                    <i class="fa fa-check-square bg-blue"></i>
                    <div class="timeline-item">
                      <div class="timeline-body">
                        <div class="teks-materi">
                          <p>Waktu ke waktu perkembangan digital sudah sangat canggih dan dapat memberikan banyak sekali kemudahan untuk kita seperti mudah nya berkomunikasi jarah jauh hingga bisa saling tukar informasi yang ada di dunia maya seperti sekarang ini.</p>
                          <p>Lepas dari semua itu apakah kalian terfikirkan bagaimana kita bisa berkomunikasi dalam jangkaun yang cukup jauh?</p>

                          <p>Pada jaringan komputer itu sendiri ada sebuah alat yang menghubungkan yaitu routing. <b>Routing adalah sebuah alat yang dapat mengirimkan paket data melalui sebuah jaringan internet menuju tujuannya.</b> Routing inilah yang akan mengirimkan informasi atau paket data dari seluruh pengguna yang saling terhubung dan mengirimkannya ke perangkat-perangkat lain.</p>

                          <p>Terdapat beberapa jenis routing, salah satunya adalah <b>Routing Dinamis.</b> Routing dinamis sangat sering digunakan oleh penyedia jasa internet.</p>
                        </div>
                        <p></p>
                        <b>Bagaimana ?</b>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="btn-faham">
                              <button type="button" class="btn btn-block btn-social btn-warning" id="btn-normal" data-toggle="modal" data-target="#modal-warning"> <i class="fa fa-long-arrow-right"></i>
                                Sudah faham ?
                              </button>
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                          <div class="col-md-4"></div>
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
                        <h4 class="modal-title"> Sudah faham? </h4>
                      </div>
                      <div class="modal-footer">
                        <a href="materiguru1"><button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Bentar, Aku mau baca halaman ini lagi</button></a>
                        
                        <a href="materiguru2"><button type="button" class="btn btn-outline"> Sudah, Aku mau tau tentang Routing Dinamis</button></a>
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
