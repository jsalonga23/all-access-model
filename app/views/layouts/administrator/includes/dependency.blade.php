<!-- Bootstrap Core CSS -->
{{ HTML::style('admin/bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css', array('rel' => 'stylesheet')); }}

@if ($themingOptions['jquery_uploader'])
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
@endif

<!-- MetisMenu CSS -->
{{ HTML::style('admin/bootstrap/bower_components/metisMenu/dist/metisMenu.min.css', array('rel' => 'stylesheet')); }}

<!-- Custom CSS -->
{{ HTML::style('admin/bootstrap/dist/css/sb-admin-2.css', array('rel' => 'stylesheet')); }}

@if ($themingOptions['datatable'])
	<!-- DataTables Responsive CSS -->
	{{ HTML::style('admin/bootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css', array('rel' => 'stylesheet')); }}
	{{ HTML::style('admin/bootstrap/bower_components/datatables-responsive/css/dataTables.responsive.css', array('rel' => 'stylesheet')); }}

@endif

{{ HTML::style('admin/bootstrap/bower_components/morrisjs/morris.css', array('rel' => 'stylesheet')); }}


<!-- Custom Fonts -->
{{ HTML::style('admin/bootstrap/bower_components/font-awesome/css/font-awesome.min.css', array('rel' => 'stylesheet','type'=>'text/css')); }}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery -->
{{ HTML::script('admin/bootstrap/bower_components/jquery/dist/jquery.min.js') }}
