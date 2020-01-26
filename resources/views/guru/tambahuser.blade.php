@extends('layout.layout_guru')

@section('content')

<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Form Insert User</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/dashguru')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{asset('/dashguru')}}"></i>User</a></li>
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

                <form action="{{route('simpan.user')}}" method="post">
                    {{ csrf_field() }} 
                    <div class="form-group">
                      <label> ID :</label>
                      <div><input type="text" class="form-control"  name="id" required></div>
                    </div>
                    <div class="form-group">
                      <label>Nama :</label>
                      <div><input type="text" class="form-control"  name="nama" required></div>
                    </div>
                    <div class="form-group">
                      <label>Email :</label>
                      <div><input type="text" class="form-control"  name="email" required></div>
                    </div>
                    <div class="form-group">
                      <label>Password :</label>
                      <div><input type="password" class="form-control"  name="password" required></div>
                    </div>
                    <div class="form-group">
                      <label>Nomor HP :</label>
                      <div><input type="text" class="form-control"  name="no_tlp" required></div>
                    </div>
                    <div class="form-group">
                        <label>Pilih Status:</label>
                        <div>
                            <select class="form-control" name="status">
                                <option value="" disabled selected hidden>Pilih role</option>
                                <option value="siswa">Siswa</option>
                                <option value="guru">Guru</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
</section>

@endsection
