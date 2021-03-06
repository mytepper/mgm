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
                <a href="{{URL::to('store/cartypes')}}">ประเภทรถ</a>
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
                    <a href="#tab2_1" data-toggle="tab">ส่วนจัดการข้อมูลประเภทรถ</a>
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
                            <a class="btn btn-lg btn-success btn-block" href="{{URL::to('store/cartypes/add')}}">
                              <i class="fa fa-plus"></i> เพิ่มข้อมูลประเภทรถ
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
                                        <th>ชื่อประเภทรถ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @if($cartype)
                                <tbody>
                                    @foreach ($cartype as $key => $value) 
                                      {{ Form::open(array('url' => 'store/cartypes/edit')) }}
                                      <tr>
                                          <td>{{$value->id}}</td>
                                          <td>
                                              {{ Form::hidden('id', $value->id, array('class'=>'form-control')) }} 
                                              {{ Form::text('name', $value->name, array('class'=>'form-control')) }}
                                          </td>
                                          <td width="200">
                                              <button type="submit" class="btn btn-primary">
                                                <span class="glyphicons glyphicons-ok_2"></span> Update 
                                              </button>
                                              <a href="{{URL::to('store/cartypes/destroy')}}/{{$value->id}}" class="btn btn-danger">
                                                <span class="glyphicons glyphicons-circle_remove"></span> Delete 
                                              </a>
                                          </td>
                                      </tr>
                                      {{ Form::close() }}
                                     @endforeach
                                </tbody>
                                @endif
                            </table>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12" align="center">{{$cartype->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
@stop