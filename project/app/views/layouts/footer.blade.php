@section("footer")
      <!-- Route in javascript -->
      <script type="text/javascript">
      var Route = "{{URL::to('/')}}/";
      </script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	  <script src="{{URL::to('assets/theme/vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>
      <!-- Validate form -->
      <script type="text/javascript" src="{{URL::to('assets/script/jquery.validate.min.js')}}"></script>
      <!-- PNotify -->
      <script src="{{URL::to('assets/theme/vendor/plugins/pnotify/pnotify.js')}}"></script>
      <!-- Select2 Plugin Plugin -->
      <script src="{{URL::to('assets/theme/vendor/plugins/select2/select2.min.js')}}"></script>
	  <!-- bootbox Plugin Plugin -->
      <script src="{{URL::to('assets/lib/bootbox.min.js')}}"></script>
		<!-- Bootstrap Tabdrop Plugin -->
		<script src="{{URL::to('assets/theme/vendor/plugins/tabdrop/bootstrap-tabdrop.js')}}"></script>
        <!-- Datatables -->
      <script src="{{URL::to('assets/theme/vendor/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
      <script src="{{URL::to('assets/theme/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
      <script src="{{URL::to('assets/theme/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>
      <script src="{{URL::to('assets/theme/vendor/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
		  <!-- Theme Javascript -->
		  <script src="{{URL::to('assets/theme/assets/js/utility/utility.js')}}"></script>
		  <script src="{{URL::to('assets/theme/assets/js/demo/demo.js')}}"></script>
		  <script src="{{URL::to('assets/theme/assets/js/main.js')}}"></script>
		  <!-- Widget Javascript -->
		  <script src="{{URL::to('assets/theme/assets/js/demo/widgets.js')}}"></script>
		  <script type="text/javascript">
	  jQuery(document).ready(function() {
	    "use strict";
	    // Init Demo JS
	    Demo.init();
	    // Init Theme Core
	    Core.init();

	    //fide form and validate
	    $('form:not(".novalidate")').each(function () {
	        $(this).validate();
	    });


	   //auto hide alert
	    setTimeout(function(){ $('.alert').fadeOut(500);}, 4000);
	    //data tables
	    $('.datatables').DataTable();
	    $('.datatables-nofilter').DataTable({"bFilter": false});
	    //select2
	    $.fn.modal.Constructor.prototype.enforceFocus = function() {};
	    $('.select2').each(function(){
	      $(this).select2();
	    })


	    $('.admin-panels').adminpanel({
	      grid: '.admin-grid',
	      draggable: true,
	      preserveGrid: true,
	      // mobile: true,
	      onStart: function() {
	        // Do something before AdminPanels runs
	      },
	      onFinish: function() {
	        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

	        // Init the rest of the plugins now that the panels
	        // have had a chance to be moved and organized.
	        // It's less taxing to organize empty panels
	        demoHighCharts.init();
	        runVectorMaps(); // function below
	      },
	      onSave: function() {
	        $(window).trigger('resize');
	      }
	    });
	  });
	  </script>
	  <script type="text/javascript" src="{{URL::to('assets/script/bootbox.js')}}"></script>
@show
