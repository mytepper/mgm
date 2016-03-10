@extends("layouts.main")
@section("content")

<!-- Start: Topbar -->
<header id="topbar" class="alt">
  <div class="topbar-left">
    <ol class="breadcrumb">
      <li class="crumb-active">
        <a href="{{URL::to('dashboard')}}">Dashboard</a>
      </li>
      <li class="crumb-icon">
        <a href="{{URL::to('store/customer')}}">ลูกค้า</a>
      </li>
    </ol>
  </div>
</header>

<div class="row">
  <div class="col-md-12">
      @if ($alert = Session::get('success'))
          {{ $alert }}
      @endif
  </div>
</div>

<!-- Begin: Content -->
<section id="content" class="animated fadeIn">
   <div class="row">
        <div class="col-md-12">
         <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">ข้อมูลลูกค้า</span>
              </div>
              <div class="panel-body">

                <form role="form" method="post" action="{{URL::to('store/location/edit')}}" class="form-horizontal" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">ไอคอน 100*100 Pixcel</label>
                    <div class="col-lg-8">
                      <div class="">
                        <input type="file" name="icon" class="btn">
                        <img src="{{URL::to('/')}}/uploads/{{$rs->icon}}" width="100">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">ชื่อสถานที่</label>
                    <div class="col-lg-8">
                      <div class="">
                        <input type="text" value='{{$rs->name}}' placeholder="" name="name" class="form-control" required>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">เบอร์โทรศัพท์</label>
                    <div class="col-lg-8">
                      <div class="">
                        <input type="text" value='{{$rs->tel}}' placeholder="" name="tel" class="form-control" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">ลองจิจูด</label>
                    <div class="col-lg-8">
                      <div class="">
                        <input type="text" value='{{$rs->long_}}' placeholder="" name="long_" class="form-control" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">ละติจูด</label>
                    <div class="col-lg-8">
                      <div class="">
                        <input type="text" value="{{$rs->lagi_}}" placeholder="" name="lagi_" class="form-control" required>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">แผนที่ ( Google maps )</label>
                    <div class="col-lg-8">
                      <div class="">
                        <textarea name="code_map" class="form-control">{{$rs->code_map}}</textarea>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">ที่อยู่</label>
                    <div class="col-lg-8">
                      <div class="">
                        <textarea name="address" class="form-control">{{$rs->address}}</textarea>
                      </div>
                    </div>
                  </div>



                  <div class="form-group">
                     <label for="textArea3" class="col-lg-3 control-label"></label>
                     <input type="hidden" name="id" value="{{$rs->id}}">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>


              </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
@stop