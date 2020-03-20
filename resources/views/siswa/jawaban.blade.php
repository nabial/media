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
        <div class="col-md-3"></div>
        <div class="col-md-6" align="center">
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
        <div class="col-md-3"></div>
      </div>

      <div class="row">

<!-- no 1 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_1 == 'A')
                  <h2>No 1 jawaban kamu benar</h2>
                @else
                  <h2>No 1 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>   

<!-- no 2 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_2 == 'A')
                  <h2>No 2 jawaban kamu benar</h2>
                @else
                  <h2>No 2 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      
<!-- no 3 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_3 == 'A')
                  <h2>No 3 jawaban kamu benar</h2>
                @else
                  <h2>No 3 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>

<!-- no 4 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_4 == 'A')
                  <h2>No 4 jawaban kamu benar</h2>
                @else
                  <h2>No 4 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>

<!-- no 5 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_5 == 'A')
                  <h2>No 5 jawaban kamu benar</h2>
                @else
                  <h2>No 5 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>

<!-- no 6 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_6 == 'B')
                  <h2>No 6 jawaban kamu benar</h2>
                @else
                  <h2>No 6 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>

<!-- no 7 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_7 == 'B')
                  <h2>No 7 jawaban kamu benar</h2>
                @else
                  <h2>No 7 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>


<!-- no 8 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_8 == 'B')
                  <h2>No 8 jawaban kamu benar</h2>
                @else
                  <h2>No 8 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>

<!-- no 9 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_9 == 'C')
                  <h2>No 9 jawaban kamu benar</h2>
                @else
                  <h2>No 9 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>

<!-- no 10 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              @foreach($simpanjawaban as $jawaban)
                @if($jawaban->no_10 == 'C')
                  <h2>No 10 jawaban kamu benar</h2>
                @else
                  <h2>No 10 Jawaban kamu salah karena blablablablablaaa</h2>
                @endif
              @endforeach
            </div>
          </div>
        </div>


        </div>

    </section>  
@endsection
