@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Bab 1</h2>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"></i>Materi</a></li>
                    <li class="active">Bab 1</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
  <section class="content">
    <!-- callout -->
      <div class="callout callout-info">
        <a href="materi1"><h4>Judul Materi 1</h4></a>
        <a href="materi1"><p>Materi 1 blablablaa lorem ipsum dolor sit amet </p></a>
      </div>

      <div class="callout callout-danger">
        <a href="materi1"><h4>Judul Materi 2</h4></a>
        <a href="materi1"><p>Materi 2 blablablaa lorem ipsum dolor sit amet </p></a>
      </div>
      <!-- /.callout -->
    <!-- okeh -->
    <div class="row">
      <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Konsep Routing dinamis</a></li>
              <li><a href="#timeline" data-toggle="tab">Jenis Routing</a></li>
              <li><a href="#settings" data-toggle="tab">Perintah dasar Routing</a></li>
              <li><a href="#timeline" data-toggle="tab">Konfigurasi Routing</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                </div>
                <!-- /.post -->
              </div>

              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          jenis routing
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">RIP</a> Routing Information Protocol </h3>
                      <div class="timeline-body">
                        LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->

                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">OSPF</a> Open Short Path First</h3>
                      <div class="timeline-body">
                        LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMETLOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->

                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">BGP</a> Border Gateway Protocol</h3>
                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->

                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          SISI CANTIQ
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">SISI CANTIQ</a> uploaded new photos</h3>
                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
               <div class="post">
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
    </div>
    <!-- end okeh -->
  </section>

@endsection
