@extends('layout.layout_siswa')

@section('content')

    <!-- Main content -->
    <section class="content-homesiswa">

      <!-- <img src="{{asset('admin_lte/dist/img/coba33.png')}}" width="100%" style="position: fixed;"> -->

      <div class="background">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="tekskiri">
						<div class="tekskiri" data-aos="zoom-in-down" data-aos-duration="1500">
							<h1>Belajar dimana saja, kapan saja</h1>
							<p>Semangat belajar demi cita-citamu di masa depan!</p>
							<a href="bab" class="btn-home">Mulai Belajar <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-7">
					<div class="gambarkanan" >
						<div class="gambarkanan" data-aos="zoom-in-down" data-aos-duration="1500"> <img src="{{asset('admin_lte/dist/img/elearning.png')}}"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

    </section>
@endsection
