@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Bab 1</h2>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"></i>Materi</a></li>
                    <li class="active">Bab 1</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
  <section class="content">


     <!--  <div class="callout callout-info">
        <a href="materi1"><h4>Judul Materi 1</h4></a>
        <a href="materi1"><p>Materi 1 blablablaa lorem ipsum dolor sit amet </p></a>
      </div>

      <div class="callout callout-info" >
        <a href="materi1"><h4>Judul Materi 2</h4></a>
        <a href="materi1"><p>Materi 2 blablablaa lorem ipsum dolor sit amet </p></a>
      </div> -->


        <!-- <div class="col-md-4">
          <div class="box box-widget widget-user">
            <div class="widget-user-header bg-aqua-active">
              <img src="admin_lte/dist/img/banner_img.png">
            </div>
            <div class="box-footer">
              <a href="materi1"><h4>Judul Materi 2</h4></a>
            </div>
          </div>
        </div> -->


        <div class="row">

          <div class="col-md-4">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive pad" src="admin_lte/dist/img/banner_img.png" alt="Photo">
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
                <img class="img-responsive pad" src="admin_lte/dist/img/advance.png" alt="Photo">
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
                <img class="img-responsive pad" src="admin_lte/dist/img/advance.png" alt="Photo">
                <p>I took this photo this morning. What do you guys think?</p>
              </div>    
              <div class="box-caption">
                <a href="materi1"><h4>Judul Materi 2</h4></a>
              </div>
            </div>
          </div>

        </div>


    
  </section>

@endsection
