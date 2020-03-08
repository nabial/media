@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Kuis</h2>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Kuis</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <form action="{{route('simpanjawaban')}}" method="post">
          {{ csrf_field()}}
          <div class="form-group">
            <label>User Id :</label>
            <div>          
              <input type="text" class="form-control"  name="user_id">
            </div>
          </div>
        <!-- soal 1 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>1. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_1" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_1" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_1" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_1" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 2 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>2. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_2" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_2" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_2" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_2" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>


        <!-- soal 3 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>3. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_3" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_3" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_3" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_3" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 4 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>4. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_4" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_4" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_4" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_4" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 5 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>5. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_5" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_5" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_5" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_5" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 6 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>6. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_6" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_6" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_6" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_6" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 7 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>7. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_7" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_7" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_7" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_7" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 8 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>8. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_8" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_8" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_8" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_8" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 9 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>9. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_9" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_9" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_9" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_9" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 10 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>10. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_10" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_10" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_10" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_10" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 11 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>11. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_11" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_11" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_11" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_11" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>

        <!-- soal 12 -->
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-12">
                  <h1>12. sebutkan ibukota indonesia ?</h1>
                </div>
              </div>
            </div>
            <div class="box-radio">
              <div class="radio">
                <label><input type="radio" name="no_12" value="A" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_12" value="B" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_12" value="C" >Halo</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="no_12" value="D" >Halo</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary"> Submit </button>
        </div>

        
      </form>
      </div>
    </section>
@endsection
