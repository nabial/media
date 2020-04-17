@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h3>Nilai Siwa</h3>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Nilai siswa</li>
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

                  <a href="/guru/jawaban/export_excel" class="btn btn-primary my-3" target="_blank">Download Excel </a>

                  <table id="mydatatables" class="table table-collapse table-hover table-light table-striped cell-border table-responsive">
                      <thead>
                        <th>No</th>
                        <th>id</th>
                        <th>Nama Siswa</th>
                        <th>Nilai</th>
                      </thead>
                      
                      <tbody> 
                      @foreach($hasil as $jawaban)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $jawaban->users->id }}</td>
                        <td>{{ $jawaban->users->nama }}</td>
                        <td>{{ $jawaban->score }}</td>
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
