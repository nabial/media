@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Video</h2>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"></i>Materi</a></li>
                    <li class="active">Video</li>
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
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-video-camera"></i> Tutorial hmmm</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-angle-down"></i>
                </button>
              </div>
            </div>
            @foreach($materivideo as $video)
            <div class="box-body">
                <video> {{ $video->video }} </video>
            </div>
            @endforeach
          </div>
        </div>

        <div class="col-md-12">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-video-camera"></i> Tutorial manjah</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-angle-down"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              isi video
              lorem ipsum dolor sit amet
              lorem ipsum dolor sit amet
            </div>
          </div>
        </div>


      </div>
    </section>

@endsection
