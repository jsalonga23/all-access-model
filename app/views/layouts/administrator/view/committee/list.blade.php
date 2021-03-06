<div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> <a href="{{ URL::to('data/committee/add') }}" class="btn btn-primary">New Committee</a> </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Description</th>
                  <th style="width:50px;">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($committee as $officer)
                <tr class="odd gradeX" id="row_{{ $officer->id }}">
                <td width="150">
                  <a href="{{ URL::to('data/committee/edit/'.$officer->id) }}" >
                    {{ $officer->name }}
                  </a> 
                </td>
                <td width="150">{{$officer->designation}}</td>
                <td>{{$officer->description}}</td>
                <td width="70"><ul class="nav navbar-top-links navbar-right removeAttribute">

                    <li class="dropdown removeAttribute"> <a class="dropdown-toggle removeAttribute" data-toggle="dropdown" href="#"><!-- <i class="fa fa-bars" aria-hidden="true"></i>&nbsp; --><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('data/committee/edit/'.$officer->id) }}" ><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Edit</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:actionType('delete',{{$officer->id}})"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete</a></li>
                      </ul>
                      <!-- /.dropdown-messages --> 
                    </li>
                  </ul>
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
<!-- /#page-wrapper --> 

<script>
    
    // var productsCall = AdministratorProducts;
    // productsCall.WebsiteUrl = "{{ URL::to('/') }}";

    function actionType(action, anotherID)
    {   
        var r = confirm("Are you sure you want to delete this committee?");

        if (r == true)
        {

           var urlPathAddToCart = "{{ URL::to('/data/committee/delete/') }}" + "/" +anotherID;

            $.ajax({
                type: "GET",
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
