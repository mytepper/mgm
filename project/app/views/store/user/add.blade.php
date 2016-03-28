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
                <a href="{{URL::to('store/location')}}">สถานที่</a>
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
                    <span class="panel-title">ข้อมูลสถานที่</span>
                </div>
                <div class="panel-body">
                  {{ Form::open(array('url' => 'store/user/create', 'class' => 'form-horizontal')) }}
                    <?php echo Helper::textForm('', array('name' => 'id'), true); ?>
                    <?php echo Helper::textForm('อีเมล', array('name' => 'email')); ?>
                    <?php echo Helper::textForm('รหัสผ่าน', array('name' => 'password')); ?>
                    <?php echo Helper::textForm('ยืนยันรหัสผ่าน', array('name' => 'password_confirm')); ?>
                    <?php echo Helper::textForm('ชื่อ', array('name' => 'first_name')); ?>
                    <?php echo Helper::textForm('นามสกุล', array('name' => 'last_name')); ?>
                    <?php echo Helper::textForm('เพศ', array('name' => 'last_name')); ?>
                    <?php echo Helper::textForm('ประเภท', array('name' => 'last_name')); ?>
                    <?php echo Helper::textForm('ผู้แนะนำ', array('name' => 'invite')); ?>
                    <?php echo Helper::buttomForm('save', 'submit'); ?>
                  {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
@stop