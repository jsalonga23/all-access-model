<div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> 
          <a href="{{ URL::to('data/member/add') }}" class="btn btn-primary">New Member</a> 
          <span class="pull-right">
            <a href="{{URL::to('data/member/csv')}}">
              <i class="fa fa-print" aria-hidden="true"></i>
            </a>
          </span>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Member ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Mobile Number</th>
                  <th>Email Address</th>
                  <th>Start Membership</th>
                  <th>End Membership</th>
                  <th>Status</th>
                  <th style="width:50px;">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($rsMembers as $item)
            

              <!--Image-->
              <tr class="odd gradeX" id="row_{{ $item->id }}">
                <td width="200">
                  <a href="{{ URL::to('data/member/edit/'.$item->id) }}" >
                    {{ $item->member_id }}
                  </a> 
                </td>
                <td>{{ $item->firstname }}</td>
                <td>{{ $item->lastname }}</td>
                <td>{{ $item->mobile }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->start_date }}</td>
                <td>{{ $item->end_date }}</td>
                
                <td width="100" class="text-center">

               

                {{ $item->status?'
                  <button class="btn btn-xs btn-success btn-xs">Active</button>
                  ':'
                  <button class="btn btn-xs btn-default btn-xs">Inactive</button>
                  '}}
                </td>
                <td width="70"><ul class="nav navbar-top-links navbar-right removeAttribute">

                    <li class="dropdown removeAttribute"> <a class="dropdown-toggle removeAttribute" data-toggle="dropdown" href="#"><!-- <i class="fa fa-bars" aria-hidden="true"></i>&nbsp; --><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('data/member/edit/'.$item->id) }}" ><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Edit</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:actionType('delete','{{$item->id}}')"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete</a></li>
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
        var r = confirm("Are you sure you want to delete this account?");

        if (r == true)
        {

           var urlPathAddToCart = "{{ URL::to('/data/member/delete/') }}" + "/" +anotherID;

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
