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
        <a href="{{URL::to('store/car_type')}}">ประเภทรถ</a>
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
                <span class="panel-title">ข้อมูลประเภทรถ</span>
              </div>
              <div class="panel-body">

                {{ Form::open(array('url' => 'store/cartypes/create', 'class' => 'form-horizontal')) }}
                  <?php echo Helper::textForm('', array('name' => 'id'), true);?>
                  <?php echo Helper::textForm('ชื่อประเภทรถ', array('name' => 'name'));?>
                  <?php echo Helper::buttomForm('save', 'submit'); ?>
                {{ Form::close() }}
                
              </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
@stop