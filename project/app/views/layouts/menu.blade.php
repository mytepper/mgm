@section("menu")
  <!-- Start: Sidebar -->
  <aside id="sidebar_left" class="nano nano-light affix">
    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">
      <!-- Start: Sidebar Menu -->
      <ul class="nav sidebar-menu">
        
        <li class="sidebar-label pt15">Manage</li>
        
        <li>
          <a href="{{URL::to('store/calendar')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ตารางประชุม</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/level')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลระดับ</span>
          </a>
        </li>

         <li>
          <a href="{{URL::to('store/user')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลสมาชิก</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/branch')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลบริษัทประกันภัย</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/car_brand')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลยี่ห้อรถ</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/car_type')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลประเภทรถ</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/car_year')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลปีรถ</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/product')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลประกันภัย</span>
          </a>
        </li>




        <li>
          <a href="{{URL::to('store/location')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลสถานที่</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/dashboard/admin')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">แก้ไขข้อมูลการเข้าสู่ระบบ</span>
          </a>
        </li>
        
      </ul>
      <!-- End: Sidebar Menu -->
      <!-- Start: Sidebar Collapse Button -->
      <div class="sidebar-toggle-mini">
        <a href="#">
          <span class="fa fa-sign-out"></span>
        </a>
      </div>
      <!-- End: Sidebar Collapse Button -->
    </div>
    <!-- End: Sidebar Left Content -->
  </aside>
  <!-- End: Sidebar Left -->
  @show