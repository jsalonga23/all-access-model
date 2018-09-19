<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$PageTitle}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <a href="{{ URL::to('data/annoucement/add') }}" class="btn btn-primary">New Announcement</a>

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        @include('layouts.administrator.includes.error')

                        <div class="dataTable_wrapper">

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th colspan="1">Date</th>
                                        <th colspan="2">Title</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($rsObject)<=0)
                                        <tr>    
                                            <td colspan="2" class="no-record">No Record Found</td>
                                        </tr>
                                    @endif

                                    @foreach($rsObject as $list)
                                        <tr class="odd gradeX" id="row_{{$list->id}}">
                                            
                                            <td>{{ date('F d, Y', strtotime($list->date_created) ) }}</td>
                                            <td>{{$list->title}}</td>
                                            
                                            <td class="text-center class_action">
                                                <a href="{{ Url::to('data/announcement/edit/'.$list->id) }}" class="btn btn-primary btn-xs btn-xs">Edit</a>&nbsp;
                                                <a href="javascript:actionType('delete','{{$list->id}}')" class="btn btn-danger btn-xs btn-xs">Delete</a>
                                            </a>
                                            </td>
                                        </tr>

                                        

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
</div>
        <!-- /#page-wrapper -->
<script>
    // var productsCall = AdministratorProducts;

    // productsCall.WebsiteUrl = "{{ URL::to('/') }}";

    function actionType(action, anotherID)
    {   

        var txt;
        var r = confirm("Are you sure you want to delete this?");
        if (r == true) 
        {
            var urlPathAddToCart = "{{ URL::to('/data/announcement/delete/') }}" + "/" +anotherID;
            $.ajax({
                type: "POST",
                url: urlPathAddToCart,
                dataType: "json",
                success: function(data)
                {
                    if (data.status)
                    {
                        $('#dataTables-example tr#row_'+anotherID).remove();                    
                    }
                    else 
                    {
                        
                    }
                },
                error: function()
                {
                    
                }
            });

        } 
    }

</script>
