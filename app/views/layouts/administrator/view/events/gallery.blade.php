

<br/>

  <div class="row">
  	 <div class="col-md-8">
      <div class="col-md-12">  
         <div class="panel panel-default">
                  <div class="panel-heading">
                      Event Gallery
                  </div>
                  <div class="panel-body">
                    <div class="row" id="gallery_wrapper">
                      {{-- {{utilities::debug($rsGallery)}} --}}
                      @foreach($rsGallery as $pic)

                        <div class="col-md-4 gallery-menu" id="div_{{$pic->id}}">
                          <div style="height: 200px;overflow: hidden;margin-bottom: 5px;">
                            <img src="{{asset('assets/images/events/'.$pic->event_id.'/album/'.$pic->image) }}" class="img-responsive img-thumbnail img-gallery">
                          </div>                            
                          <div class="row">

                              <div class="col-md-6 text-right">
          <a href="javascript:deletePhoto({{$pic->id}}, {{$pic->year}}, '{{$pic->month}}', {{$pic->event_id}})" class="delete" id="{{$pic->id}}"> <span class="fa fa-trash-o"></span></a>
                              </div>

                          </div>
                          
                        </div>

                      @endforeach
                 
                    </div>
                  </div>
            </div>
      </div>  
     </div>

 	<div class="col-md-4">
			
      {{-- {{utilities::debug($rsEvents)}} --}}
       <div class="col-md-12"> 
          <form id="file_upload" class="file_upload" action="{{URL::to('data/event/gallery/upload')}}" method="POST" enctype="multipart/form-data">
              <input type="file" name="file" multiple>
              <input type="hidden" id="txtEventId" name="txtEventId" value="{{$rsEvents->id}}">
              <input type="hidden" id="txtEventYear" name="txtEventYear" value="{{$rsEvents->year}}">
              <input type="hidden" id="txtEventMonth" name="txtEventMonth" value="{{$rsEvents->month}}">

              <button>Upload</button>
              <div>Drag or Select Image</div>
          </form>
          <br/>
          <table id="files"></table>

      </div>


  	</div>
  </div>
<link rel="stylesheet" href="{{asset('admin/js/drag/jquery.fileupload-ui.css')}}">
<script type="text/javascript" src="{{asset('admin/js/drag/jquery.fileupload.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/drag/jquery.fileupload-ui.js')}}"></script>
<script text="text/javascript">

  
  $(document).ready(function(){

    $('#file_upload').fileUploadUI({
          uploadTable: $('#files'),
          downloadTable: $('#files'),
          buildUploadRow: function (files, index) {
              return $('<tr><td>' + "Please wait..." + '<\/td>' +
                      '<td class="file_upload_progress"><div><\/div><\/td>' +
                      '<td class="file_upload_cancel">' +
                      '<button class="ui-state-default ui-corner-all" title="Cancel">' +
                      '<span class="ui-icon ui-icon-cancel">Cancel<\/span>' +
                      '<\/button><\/td><\/tr>');
          },
          buildDownloadRow: function (file) {
              //  return $('<tr><td>' + file.name + '<\/td><\/tr>');

              // $('#imgThumbnail').attr('src', file.imgUrlThumbnail);

               $('#gallery_wrapper').append(file.file);

          }
      });


  });


  function deletePhoto($anotherID, $year, $month, $eventId)
  {
        var id = $anotherID;
        var year = $year;
        var eventId = $eventId;
        var month = $month;
        var txt;
        var r = confirm("Are you sure want to delete this record?");
        if (r == true) {
            
            var urlPathAddToCart = "{{ URL::to('/data/events/gallery/photo/delete') }}" + '/' + $anotherID;
            
            $.ajax({
                type: "POST",
                url: urlPathAddToCart,
                dataType: "json",
                data: {
                        id: id, 
                        event_id: eventId, 
                        event_year: year, 
                        event_month: month, 
                      },
                success: function(data)
                {
                    if (data.status)
                    {
                        $('#div_'+$anotherID).remove();                    
                    }
                    else 
                    {
                        alert(data.message);
                    }
                },
                error: function()
                {
                    
                }
            });


        } else 
        {
              
        }
     

  }

</script> 
