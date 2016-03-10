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
        <a href="{{URL::to('store/location')}}">การเข้าสู่ระบบ</a>
      </li>
    </ol>
  </div>
</header>

<div class="row">
  <div class="col-md-12">
      <?php if($errors->has()){?>
      <p class="alert alert-danger">
        <?php
        if($errors->has('email')) echo $errors->first('email')."<br>";
        if($errors->has('password')) echo $errors->first('password')."<br>";
        if($errors->has('password_confirmation')) echo $errors->first('password_confirmation')."<br>";
        ?>
      </p>
      <?php } ?>
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
                <span class="panel-title">ข้อมูลการเข้าสู่ระบบ</span>
              </div>
              <div class="panel-body">

                <form role="form" method="post" action="{{URL::to('store/dashboard/admin_update')}}" class="form-horizontal" enctype="multipart/form-data">
                  
                   <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">อีเมลล์</label>
                    <div class="col-lg-8">
                      <div class="">
                        <input type="text" value='{{$rs->email}}' placeholder="" name="email" class="form-control" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">รหัสผ่าน</label>
                    <div class="col-lg-8">
                      <div class="">
                        <input type="text" placeholder="" name="password" class="form-control">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputStandard">รหัสผ่านอีกครั้ง</label>
                    <div class="col-lg-8">
                      <div class="">
                        <input type="text" placeholder="" name="password_confirmation" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                     <label for="textArea3" class="col-lg-3 control-label"></label>
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