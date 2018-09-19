<!DOCTYPE html>
<html lang="en">

<head>
    {{ HTML::style('admin/css/style.css', array('rel' => 'stylesheet')); }}
    <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="{{asset('admin/css/datetimepicker.css')}}">
    @include('layouts.administrator.includes.metatags')
    @include('layouts.administrator.includes.dependency')
</head>

    <body> 

        <div id="wrapper">
            @include('layouts.administrator.includes.navigation')
            {{ $content }}
        </div>
        <!-- /#wrapper -->
        
        @include('layouts.administrator.includes.footer')
    </body>
    
</html>
