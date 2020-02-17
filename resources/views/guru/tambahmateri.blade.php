@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Form Insert User</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/superadmin/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{asset('/superadmin/user')}}"></i>User</a></li>
                    <li class="active">Insert User</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">

                <form action="{{route('simpan.materi')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="form-group">
                      <label> Judul Materi :</label>
                      <div><input type="text" class="form-control"  name="judul" required></div>
                    </div>
                    <div class="form-group">
                      <label>Isi Materi:</label>
                      <div><input type="text" class="form-control"  name="isi_materi" required></div>
                    </div>
                    <div class="form-group">
                      <label>Video :</label>
                      <div><input type="file" class="form-control"  name="video"></div>
                    </div>
                    <div class="form-group">
                      <label>Gambar :</label>
                      <div><input type="file" class="form-control"  name="gambar"></div>
                    </div>
      
                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="#" class="btn btn-secondary"> Cancel</a>
                </form>
              </div>
            </div>
          </div>
        </div>
</section>
@endsection
