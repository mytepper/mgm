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
        <a href="{{URL::to('store/companies')}}">บริษัทประกันภัย</a>
      </li>
    </ol>
  </div>
</header>
<!-- End: Topbar -->
<!-- Begin: Content -->
<section id="content" class="table-layout animated fadeIn">
  <div class="panel">
    <div class="panel-heading">
      <ul class="nav panel-tabs-border panel-tabs panel-tabs-left">
        <li class="active">
          <a href="#tab2_1" data-toggle="tab">ส่วนจัดการข้อมูลบริษัทประกันภัย</a>
        </li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content pn br-n">
        <div class="tab-pane active">
          <div class="row">
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
              <a class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#modaladd" data-whatever="@mdo"><i class="fa fa-plus"></i> เพิ่มข้อมูลบริษัทประกันภัย</a>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">

                <table class="table table-condensed display" align="left">
                <thead>
                  <tr>
                    <th>รหัส</th>
                    <th>ชื่อบริษัทประกันภัย</th>
                    <th>ที่อยู่</th>
                    <th></th>
                  </tr>
                </thead>
                @if($company)
                <tbody>
                @foreach ($company as $key => $value)
                  <form action="{{URL::to('store/companies/edit')}}" method="post">
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>
                        <input type="text" name="name" value="{{$value->name}}" class="form-control">
                        <input type="hidden" name="id" value="{{$value->id}}">
                      </td>
                       <td>
                        <input type="text" name="address" value="{{$value->address}}" class="form-control">
                      </td>
                      <td width="200">
                        <button class="btn btn-primary"><span class="glyphicons glyphicons-ok_2"></span>  Update </button>
                        <a href="{{URL::to('store/companies/destroy')}}/{{$value->id}}" class="btn btn-danger delete"><span class="glyphicons glyphicons-circle_remove"></span> Delete </a>
                      </td>
                    </tr>
                  </form>
                @endforeach
                </tbody>
                @endif
              </table>

            </div>
            <div class="col-md-12 col-sm-12 col-lg-12" align="center">{{$company->links()}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End: Content -->
<!-- START: PAGE MODAL -->
@include("layouts.companies.modal_add")
<!-- END: PAGE MODAL -->
@stop
