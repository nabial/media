@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Routing dinamis</h2>
                <ol class="breadcrumb">
                    <li><a href="dashsiswa"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Materi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
  <section class="content">

        <div class="row">

          <div class="col-md-6">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive pad" src="admin_lte/dist/img/banner_img.png" alt="Photo" width="300">
                <p>Tahukah kamu tentang routing dinamis?</p>
              </div>
              <div class="box-caption">
                <a href="materi1"><h4>Pengenlanan Routing Dinamis</h4></a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive pad" src="admin_lte/dist/img/2538.jpg" alt="Photo" width="350">
                <p>???</p>
              </div>    
              <div class="box-caption">
                <a href="materi2"><h4>Jenis-jenis routing dinamis</h4></a>
              </div>
            </div>
          </div>

        </div>

        <!-- <div class="row">
          <div class="col-md-4">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive pad" src="admin_lte/dist/img/4398.jpg" alt="Photo">
                <p>I took this photo this morning. What do you guys think?</p>
              </div>
              <div class="box-caption">
                <a href="materi1"><h4>Judul Materi 2</h4></a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive pad" src="admin_lte/dist/img/2539.jpg" alt="Photo">
                <p>I took this photo this morning. What do you guys think?</p>
              </div>    
              <div class="box-caption">
                <a href="materi1"><h4>Judul Materi 2</h4></a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive pad" src="admin_lte/dist/img/4589.jpg" alt="Photo">
                <p>I took this photo this morning. What do you guys think?</p>
              </div>    
              <div class="box-caption">
                <a href="materi1"><h4>Judul Materi 2</h4></a>
              </div>
            </div>
          </div>
        </div>
 -->

    
  </section>

@endsection
