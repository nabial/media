@extends('layout.layout_guru')

@section('content')

<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Edit</h1>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Edit</li>
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

                <form action="{{route('update.user',$user->email)}}" method="post">
                @csrf
                @method('put')
                    {{ csrf_field('put') }}
                    <div class="form-group">
                      <label> ID :</label>
                      <div><input type="text" class="form-control"  name="id" value="{{$user->id}}" required></div>
                    </div>
                    <div class="form-group">
                      <label>Nama :</label>
                      <div><input type="text" class="form-control"  name="nama" value="{{$user->nama}}" required></div>
                    </div>
                    <div class="form-group">
                      <label>Email :</label>
                      <div><input type="text" class="form-control"  name="email" value="{{$user->email}}" required></div>
                    </div>
                    <div class="form-group">
                      <label>Password :</label>
                      <div><input type="password" class="form-control"  name="password" value="{{$user->password}}" required></div>
                    </div>
                    <div class="form-group">
                      <label>Nomor HP :</label>
                      <div><input type="text" class="form-control"  name="no_tlp" value="{{$user->no_tlp}}" required></div>
                    </div>
                    <div class="form-group">
                        <label>Pilih Status:</label>
                        <div>
                            <select class="form-control" name="status" value="{{$user->status}}" required>
                                <option value="" disabled selected hidden>Pilih status</option>
                                <option value="siswa">Siswa</option>
                                <option value="guru">Guru</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>

</section>

@endsection
