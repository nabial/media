@extends('layout.layout_guru')

@section('content')

<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Tambah Soal</h1>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Tambah Soal</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

<section class="content">
	<div class="box-pesan">
        <h2>Whooops!</h2>
        <p>Mohon maaf. Dalam sistem kami yang berhak merubah dan menambahkan soal khusus<b> HANYA ADMIN.</b> Namun anda tetap dapat meminta admin untuk merubah soal kuis dengan klik button dibawah  </p>
     </div>

      <a href="https://forms.gle/E9Ef2mWbuT7wuRiP7" class="btn btn-primary my-3" target="_blank">Kirim pesan ke admin </a>


</section>

@endsection
