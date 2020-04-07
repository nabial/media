@extends('layout.layout_guru')

@section('content')

<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Daftar Siswa</h2>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-dashboard"></i> Home</a></li>
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
                        <th>Nama Siswa</th>
                        <th>Email</th>
                        <th>No Hanphone</th>
                        <th>Status</th>
                      </thead>
                      
                      <tbody> 
                      @foreach($datasiswa as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->no_tlp }}</td>
                        <td>{{ $user->status }}</td>
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
