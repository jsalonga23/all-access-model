<!-- Bootstrap Core JavaScript -->
{{ HTML::script('admin/bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
<!-- Metis Menu Plugin JavaScript -->
{{ HTML::script('admin/bootstrap/bower_components/metisMenu/dist/metisMenu.min.js') }}

@if ($themingOptions['datatable'])
	<!-- DataTables JavaScript -->
	{{ HTML::script('admin/bootstrap/bower_components/datatables/media/js/jquery.dataTables.min.js') }}
	{{ HTML::script('admin/bootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}

	 <script>
		$(document).ready(function() {
	        $('#dataTables-example').DataTable({
	                responsive: true,
					"iDisplayLength": 50,
 					"order": [[ 0, "desc" ]],
	        });
	    });

	</script>
@endif
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/css/colorpicker.css') }}">
<script type="text/javascript" src="{{ URL::asset('admin/js/colorpicker-color.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/colorpicker-component.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/colorpicker-defaults.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/colorpicker-plugin-wrapper.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	 $(function() {
          $('#cp2').colorpicker({
          	container:true
          });
      });
	 tinymce.init({ selector:'.textarea' });
</script>

<!-- Custom Theme JavaScript -->
{{ HTML::script('admin/bootstrap/dist/js/sb-admin-2.js') }}