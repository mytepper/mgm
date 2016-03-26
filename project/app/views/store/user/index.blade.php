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
                <a href="{{URL::to('store/users')}}">สมาชิก</a>
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

<!-- End: Topbar -->
<!-- Begin: Content -->
<section id="content" class="table-layout animated fadeIn">
    <div class="panel">
        <div class="panel-heading">
            <ul class="nav panel-tabs-border panel-tabs panel-tabs-left">
                <li class="active">
                    <a href="#tab2_1" data-toggle="tab">ส่วนจัดการข้อมูลสมาชิก</a>
                </li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content pn br-n">
                <div id="tab2_1" class="tab-pane active">
                    <div class="row">
                        <div class="col-md-9">
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-lg btn-success btn-block" href="{{URL::to('store/users/add')}}">
                              <i class="fa fa-plus"></i> เพิ่มข้อมูลสมาชิก
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-condensed display" id='car_type-data' align="left">
                                <thead>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>ชื่อ - นามสกุล</th>
                                        <th>อีเมล</th>
                                        <th>ผู้แนะนำ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @if($user)
                                <tbody>
                                    @foreach ($user as $key => $value) 
                                      <tr>
                                          <td>{{ $value->id }}</td>
                                          <td>{{ $value->first_name }}  <td>{{ $value->last_name }}</td></td>
                                          <td>{{ $value->email }}</td>
                                          <td>{{ $value->invite_id }}</td>
                                          <td width="200">
                                              <a href="{{ URL::to('store/users/edit') }}/{{ $value->id }}" class="btn btn-primary">
                                                <span class="glyphicons glyphicons-ok_2"></span> Edit 
                                              </a>
                                              <a href="{{ URL::to('store/users/destroy') }}/{{ $value->id }}" class="btn btn-danger">
                                                <span class="glyphicons glyphicons-circle_remove"></span> Delete 
                                              </a>
                                          </td>
                                      </tr>
                                     @endforeach
                                </tbody>
                                @endif
                                <tfoot>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>ชื่อ - นามสกุล</th>
                                        <th>อีเมล</th>
                                        <th>ผู้แนะนำ</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12" align="center">{{$user->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
@stop