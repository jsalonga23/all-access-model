 @include('layouts.administrator.includes.error')

<a href="{{URL::to('data/events') }}" class="btn btn-primary">Events List</a>
<br/> <br/>
<div class="panel panel-default">

    <!-- /.panel-heading -->
    <div class="panel-body">
        
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Information</a></li>
          <li><a data-toggle="tab" href="#category">Category</a></li>
          <li><a data-toggle="tab" href="#gallery">Pictures</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                @include('layouts.administrator.view.events.includes.edit')
            </div>

           <div id="category" class="tab-pane fade">
                 @include('layouts.administrator.view.events.includes.category')
           </div>

            <div id="gallery" class="tab-pane fade">
            <!-- Gallery -->
                @include('layouts.administrator.view.events.gallery')
            </div>

        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('admin/js/moment.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#txtStartDate').datetimepicker({
            format: 'YYYY-MM-DD'
         });
        $('#txtEndDate').datetimepicker({
            format: 'YYYY-MM-DD'
         });
        $('#txtStartTime').datetimepicker({
            format: 'LT'
         });
        $('#txtEndTime').datetimepicker({
            format: 'LT'
         });
    });
</script>