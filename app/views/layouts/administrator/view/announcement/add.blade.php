
<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$PageTitle}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
       
            {{ Form::open(array('url' => 'data/announcement/add/submit','role'=>'form',  'method' => 'post','id'=>'CategoryForm','enctype'=>'multipart/form-data')) }}

            <a href="{{URL::to('data/announcement') }}" class="btn btn-primary">Announcement list</a>
            <br/> <br/>
            <div class="panel panel-default">
                        <div class="panel-heading text-right">
                            <input type="submit" class="btn btn-primary " value="Submit">
                            <input type="reset" class="btn btn-default " value="Cancel">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                             @include('layouts.administrator.includes.error')
        

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="information">
                                      <div class="row">

                                        <div class="col-md-12">

                                           <div class="form-group">
                                                <label for="labelTitle">Date</label>
                                                <input type="text" class="form-control datepicker" name="txtDate" placeholder="mm/dd/yyyy">
                                             </div>


                                        <div class="form-group">
                                                <label for="labelTitle">Title</label>
                                                <input type="text" class="form-control " name="txtTitle" placeholder="Title">
                                             </div>



                                            <div class="form-group">
                                                <label for="labelTitle">Annoucement</label>
                                                <textarea name="txtAnnoucement" class="form-control" placeholder="Your Annoucement" rows="10">{{Input::old('txtUnit')}}</textarea>
                                             </div>

                                        </div>

                                      
                                      <div class="panel-heading text-right">
                            <input type="submit" class="btn btn-primary " value="Submit">
                        </div>

                                      </div>

                                </div>
                              
                            </div>
                        </div>
                   <!-- /.panel-body -->
             </div>
             {{ Form::close() }}
        
        

</div>
        <!-- /#page-wrapper -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
    

    $(document).ready(function(){
        $('.datepicker').datepicker();
    });

</script>