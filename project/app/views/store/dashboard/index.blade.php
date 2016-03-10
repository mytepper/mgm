@extends("layouts.main")
@section("content")

      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="{{URL::to('store/dashboard')}}">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="#">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="{{URL::to('store/dashboard')}}">Home</a>
            </li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">

        <!-- begin: .tray-center -->
        <div class="tray tray-center">      
          <!-- dashboard tiles -->
          <div class="row">
            <div class="col-sm-4 col-xl-3">
              <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                  <h1 class="fs30 mt5 mbn"></h1>
                  <h6 class="text-system">จำนวนสถานที่ทั้งหมด</h6>
                </div>
              </div>
            </div>

          </div>




          </div>

        </div>
        <!-- end: .tray-center -->

      </section>
      <!-- End: Content -->

@stop