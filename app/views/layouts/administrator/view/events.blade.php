<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$pageTitle}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        @if($pageAction=="view")
            @include('layouts.administrator.view.events.list')
        @endif
        @if($pageAction=="edit")
            @include('layouts.administrator.view.events.edit')
        @endif
        @if($pageAction=="add")
            @include('layouts.administrator.view.events.add')
        @endif

</div>

<script>
    
    // var productsCall = AdministratorProducts;
    // productsCall.WebsiteUrl = "{{ URL::to('/') }}";

    function actionType(action, anotherID, year, month)
    {   
        var r = confirm("Are you sure you want to delete this account?");

        if (r == true)
        {

           var urlPathAddToCart = "{{ URL::to('/data/events/delete/') }}" + "/" +anotherID + "/" + year + "/" + month;

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