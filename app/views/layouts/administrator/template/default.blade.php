<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.administrator.includes.metatags')
    @include('layouts.administrator.includes.dependency')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic" rel="stylesheet">
    <link href="{{asset('admin/css/datetimepicker.css')}}">
    {{ HTML::style('admin/css/default.css', array('rel' => 'stylesheet')); }}
</head>

    <body>


        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                   {{ $content }}
                </div>
            </div>
        </div>

        @include('layouts.administrator.includes.footer')
      
    </body>

</html>
