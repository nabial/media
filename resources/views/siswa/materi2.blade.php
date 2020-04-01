@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Jenis-jenis routing dinamis</h2>
                <ol class="breadcrumb">
                    <li><a href="dashsiswa"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="bab"><i class="fa fa-pie-chart"></i> Materi</a></li>
                    <li class="active">Jenis-jenis routing dinamis</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

<section class="content">
	
	<div class="row">
      <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#rip" data-toggle="tab">RIP</a></li>
              <li><a href="#ospf" data-toggle="tab">OSPF</a></li>
              <li><a href="#bgp" data-toggle="tab">BGP</a></li>
              <li><a href="#eigrp" data-toggle="tab">EIGRP</a></li>
              <li><a href="#as" data-toggle="tab">AS</a></li>
            </ul>
            <div class="tab-content">
<!-- tab rip -->
              <div class="active tab-pane" id="rip">
                <div class="post">
                  <div class="row">
                    <div class="col-md-8">
                      <p>RIP (routing information protocol) merupakan protokol yang memberikan routing tabel berdasarkan router yang terhubung langsung. Kemudian, router akan memberikan informasi router selanjutnya yang terhubung langsung dengan itu. Adapun informasi yang dipertukarkan oleh RIP yaitu host, network, subnet dan rute default.</p>
                      <p>RIP terbagi menjadi dua bagian, yaitu :
                      <p>a. RIPv1 (RIP versi 1)</p>
                        <ul>
                          <li>Hanya mendukung routing class-full</li>
                          <li>Tidak ada info subnet yang dimasukkan dalam data perbaikan routing</li>
                          <li>Tidak mendukung VLSM (Variabel Length Subnet Mask)</li>
                          <li>Adanya fitur perbaikan routing broadcast</li>
                        </ul>
                       <p>b. RIPv2 (RIP versi 2)</p>
                       	<ul>
                       		<li>mendukung routing class-full dan class-less</li>
                       		<li>info subnet dimasukkan dalam data perbaikan routing</li>
                       		<li>mendukung VLSM (Variabel Length Subnet Mask)</li>
                       		<li>perbaikan routing multicast</li>
                       	</ul>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <img src="admin_lte/dist/img/banner_img.png" width="300">
                    </div>
                  </div>

                  <ul class="timeline timeline-inverse">
	                  <li class="time-label">
	                        <span class="bg-teal">
	                          RIP menggunakan distance vector, antara lain:
	                        </span>
	                  </li>
	                  <li>
	                    <i class="fa fa-envelope bg-blue"></i>
	                    <div class="timeline-item">
	                      
	                      <div class="timeline-body">
	                      	<ul>
	                      		<li>Routing protocol distance vector</li>
		                      	<li>Metric berdasarkan hop count untuk pemilihan jalur terbaik</li>
		                      	<li>Jika hop count lebih dari 15, paket dibuang</li>
		                      	<li>Update routing dilakukan secara broadcast setiap 30 detik</li>
	                      	</ul>
	                      </div>
	                    </div>
	                  </li>
	              </ul>
                  
                </div>
              </div>
<!-- tab rip -->

<!-- ospf -->
			<div class="active tab-pane" id="ospf">
                <div class="post">
                  <div class="row">
                    <div class="col-md-8">
                      <p>OSPF adalah sebuah routing protocol standar terbuka yang telah diimplementasika oleh sejumlah vendor jaringan dan dijelaskan di RFC 2328. Jika Anda memiliki banyak router, dan tidak semuanya adalah router Cisco, maka Anda tidak dapat menggunakan EIGRP. jadi pilihan Anda tinggal RIP v1, RIP v2, atau OSPF. Jika jaringan yang dikelola adalah jaringan besar, maka OSPF adalah pilihan satu-satunya. OSPF ini adalah sesuatu yang disebut route redistribution, yaitu sebuah layanan penerjemah antar routing protocol.</p>
                      <p>OSPF bekerja dengan sebuah algoritma link-state yang disebut algoritma Dijkstra / SPF. Cara kerja dari protokol ini adalah: Pertama, sebuah “pohon” dengan jalur terpendek akan dibangun. Kemudian, routing table akan diisi dengan jalur-jalur terbaik yang dihasilkan dari “pohon” tersebut. OSPF hanya mendukung routing IP saja. Update routing akan dilakukan secara floaded saat terjadi perubahan topologi jaringan.</p>
                    </div>
                    <div class="col-md-4">
                      <img src="admin_lte/dist/img/banner_img.png" width="300">
                    </div>
                  </div>

                  <ul class="timeline timeline-inverse">
	                  <li class="time-label">
	                        <span class="bg-teal">
	                          OSPF menggunakan algoritma link state, antara lain:
	                        </span>
	                  </li>
	                  <li>
	                    <i class="fa fa-envelope bg-blue"></i>
	                    <div class="timeline-item">
	                      
	                      <div class="timeline-body">
	                      	<ul>
	                      		<li>Protocol routing link state</li>
		                      	<li>Merupakan open standard protocol routing yang dijelaskan di RFC 2328</li>
		                      	<li>Menggunakan algoritma SPF untuk menghitung cost terindah</li>
		                      	<li>Update routing dilakukan secara floaded saat terjadi perubahan topologi jaringan</li>
	                      	</ul>
	                      </div>
	                    </div>
	                  </li>
	              </ul>
                  
                </div>
              </div>
<!-- end ospf -->

<!-- bgp -->
			<div class="active tab-pane" id="bgp">
                <div class="post">
                  <div class="row">
                    <div class="col-md-8">
                      <p>BGP merupakan salah satu jenis routing protocol yang ada di dunia komunikasi data. Sebagai routing protocol, BGP memiliki kemampuan untuk melakukan pengumpulan rute, pertukaran rute dan menentukan rute terbaik menuju ke sebuah lokasi dalam sebuah jaringan. Routing protocol juga pasti dilengkapi dengan algoritma yang pintar dalam mencari jalan terbaik. Namun yang membedakan BGP dengan routing protocol lain adalah BGP termasuk ke dalam kategori routing protocol jenis Exterior Gateway Protocol (EGP). BGP merupakan “distance vector exterior gateway protocol” yang bekerja secara cerdas untuk merawat path-path ke jaringan lainnya. Update – update akan dikirim melalui koneksi TCP. Protokol ini biasa digunakan antara ISP dengan ISP dan atau antara client dengan client lainnya. Dalam implementasinya, protokol ini digunakan untuk membuat rute dari trafik internet antar autonomous system.</p>
                    </div>
                    <div class="col-md-4">
                      <img src="admin_lte/dist/img/banner_img.png" width="300">
                    </div>
                  </div>

                  <ul class="timeline timeline-inverse">
	                  <li class="time-label">
	                        <span class="bg-teal">
	                          BGP menggunakan algoritma distance vector, antara lain:
	                        </span>
	                  </li>
	                  <li>
	                    <i class="fa fa-envelope bg-blue"></i>
	                    <div class="timeline-item">
	                      
	                      <div class="timeline-body">
	                      	<ul>
	                      		<li>Menggunakan routing protocol distance vector</li>
		                      	<li>Digunakan antara ISP dengan ISP dan client-client</li>
		                      	<li>Digunakan untuk merutekan trafik internet antar-autonomous system</li>
	                      	</ul>
	                      </div>
	                    </div>
	                  </li>
	              </ul>
                  
                </div>
              </div>
<!-- end bgp -->

<!-- eigrp -->
			<div class="active tab-pane" id="eigrp">
                <div class="post">
                  <div class="row">
                    <div class="col-md-8">
                      <p>EIGRP (Enhanced Interior Gateway Routing Protocol) merupakan hasil pengembangan dari routing protocol terdahulu yaitu IGRP yang keduanya adalah routing pengembangan dari CISCO. Pengembangan itu dihasilkan oleh perubahan dan bermacam-macam tuntutan dalam jaringan skala yang besar. EIGRP menggabungka kemampuan dari Link-State protocol dan Distance Vector protocol, terlebih lagi EIGRP memuat beberapa protocol penting yang secara baik meningkatkan efisiensi penggunaanya ke routing protocol lain.</p>
                      <p>EIGRP hanya bisa digunakan sesame router CISCO saja dan routing ini tidak didukung dalam jenis router yang lain.</p>
                    </div>
                    <div class="col-md-4">
                      <img src="admin_lte/dist/img/banner_img.png" width="300">
                    </div>
                  </div>

                  <ul class="timeline timeline-inverse">
	                  <li class="time-label">
	                        <span class="bg-teal">
	                          EIGRP menggunakan algoritma advance vector, antara lain:
	                        </span>
	                  </li>
	                  <li>
	                    <i class="fa fa-envelope bg-blue"></i>
	                    <div class="timeline-item">
	                      
	                      <div class="timeline-body">
	                      	<ul>
	                      		<li>Menggunakan protocol routing enhanced distance vector</li>
		                      	<li>Menggunakan cost load balancing yang tidak sama</li>
		                      	<li>Menggunakan algoritma kombinasi antara distance vector dan link-state</li>
		                      	<li>Menggunakan Diffusing Update Algorith (DUAL) untuk menghitung jalur terpendek</li>
	                      	</ul>
	                      </div>
	                    </div>
	                  </li>
	              </ul>
                  
                </div>
              </div>
<!-- end eigrp -->

<!-- as -->
			<div class="active tab-pane" id="as">
                <div class="post">
                  <div class="row">
                    <div class="col-md-8">
                      <p>Autonomous system atau yang disingkat AS merupakan suatu kelompok yang terdiri dari suatu lebih IP Prefix. Kemudian, kelompok tersebut terkoneksi sekaligus dijalankan oleh satu atau lebih operator jaringan di bawah satu kebijakan routing yang didefinisikan dengan jelas</p>
                    </div>
                    <div class="col-md-4">
                      <!-- <img src="admin_lte/dist/img/banner_img.png" width="300"> -->
                    </div>
                  </div>

                  <ul class="timeline timeline-inverse">
	                  <li class="time-label">
	                        <span class="bg-teal">
	                          dua mekanisme routing pada AS
	                        </span>
	                  </li>
	                  <li>
	                    <i class="fa fa-envelope bg-blue"></i>
	                    <div class="timeline-item">
	                      
	                      <div class="timeline-body">
	                      	<ul>
	                      		<li>Intradomain routing</li>
	                      		<p>Intradomain routing merupakan mekanisme routing yang dilakukan di dalam sebuah AS</p>
		                      	<li>Intredomain routing</li>
		              			   <p>Intredomain routing merupakan mekanisme routing yang dilakukan di luar antar-AS agar bisa berhubungan satu sama lain</p>
	                      	</ul>
                          <p></p>
                          <b>Bagaimana ?</b>
                          <div class="row">
                            <div class="col-md-3">
                              <button type="button" class="btn btn-block btn-social btn-warning" id="btn-normal" data-toggle="modal" data-target="#modal-warning"> <i class="fa fa-long-arrow-right"></i>
                                Sudah faham?
                              </button>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
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
                        <h4 class="modal-title">Sudah faham ? </h4>
                      </div>
                      <div class="modal-footer">
                        <a href="materi2"><button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Belum, Baca jenis-jenis routing dinamis lagi</button></a>
                        
                        <a href="kuis"><button type="button" class="btn btn-outline"> Sudah, Aku siap untuk kuis</button></a>
                      </div>
                      <div class="modal-body">
                        <p>Semangat &hellip;</p>
                      </div>
                    </div>
                  </div>
                </div>
<!-- button pop up -->
                </div>
              </div>
<!-- end as -->



            </div>
          </div>
        </div>
    </div>


</section>

@endsection