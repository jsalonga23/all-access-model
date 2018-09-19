@if ($errors->has())
	<div class="panel-body">
	 	<div class="alert alert-danger">
 			<ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	</div>
@endif

@if (Session::has('message_error'))
	<div class="panel-body">
	 	<div class="alert alert-danger">
				{{ Session::get('authenticated_message')}}<br/><br/>
	 	</div>
	</div>
@endif


@if (Session::has('message_success'))
	<div class="panel-body">
	 	<div class="alert alert-success">
				{{ Session::get('authenticated_message')}}<br/><br/>
	 	</div>
	</div>
@endif


