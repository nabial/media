@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Routing dinamis</h2>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-home"></i> Home</a></li>
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

          <div class="col-md-4">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive" src="{{asset('admin_lte/dist/img/a1.png')}}">
              </div>
              <div class="box-caption">
                <a href="materiguru1"><h4>Pengenalanan routing dinamis &#10141</h4></a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive" src="{{asset('admin_lte/dist/img/a2.png')}}">
              </div>
              <div class="box-caption">
                <a href="materiguru2"><h4>Konsep routing dinamis &#10141</h4></a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive" src="{{asset('admin_lte/dist/img/aa.png')}}">
              </div>    
              <div class="box-caption">
                <a href="materiguru3"><h4>Jenis-jenis routing dinamis &#10141</h4></a>
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
