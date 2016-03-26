@section("menu")
  <!-- Start: Sidebar -->
  <aside id="sidebar_left" class="nano nano-light sidebar-light affix">
    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">
      <!-- Start: Sidebar Menu -->
      <ul class="nav sidebar-menu">

        <li class="sidebar-label pt15">Manage</li>

        <li>
          <a href="{{URL::to('store/calendars')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ตารางประชุม</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/levels')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลระดับ</span>
          </a>
        </li>

         <li>
          <a href="{{URL::to('store/users')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลสมาชิก</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/companies')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลบริษัทประกันภัย</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/carbrands')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลยี่ห้อรถ</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/cartypes')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลประเภทรถ</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/caryears')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลปีรถ</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('store/products')}}">
            <span class="glyphicons glyphicons-file"></span>
            <span class="sidebar-title">ข้อมูลประกันภัย</span>
          </a>
        </li>

		<li>
		  <a href="{{URL::to('store/products/sale')}}">
			<span class="glyphicons glyphicons-file"></span>
			<span class="sidebar-title">ขายประกันภัย</span>
		  </a>
		</li>

		<li>
		  <a href="{{URL::to('store/products/store')}}">
			<span class="glyphicons glyphicons-file"></span>
			<span class="sidebar-title">ข้อมูลการขายสินค้า</span>
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
