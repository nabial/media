@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Daftar Guru</h1>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">User</li>
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

                  <table id="mydatatables" class="table table-collapse table-hover table-light table-striped cell-border table-responsive">
                      <thead>
                        <th>id</th>
                        <th>Nama Guru</th>
                        <th>Email</th>
                        <th>No Hanphone</th>
                        <th>Status</th>
                        <th>Menu</th>
                      </thead>
                      
                      <tbody> 
                      @foreach($dataguru as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->no_tlp }}</td>
                        <td>{{ $user->status }}</td>
                        <td>
                            <a href="{{route('edit.user',$user->email)}}" class="btn btn-info btn-sm">
                              <span class="fa fa-pencil"></span>
                            </a>
                            <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="{{route('delete.user',$user->email)}}" class="btn btn-danger btn-sm">
                              <span class="fa fa-trash"></span>
                           </a>
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
</div>
</section>
@endsection