<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @section('head')
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap-theme.min.css')}}" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}" type="text/css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" >
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $(function() {
                $( "#datepicker" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#to" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputorientation" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputinterview" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputmedical" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputembassy" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputtravel" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputempdateFrom" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputempdateFrom2" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputempdateTo" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputempdateTo2" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#inputissuedate" ).datepicker({dateFormat:'yy-mm-dd'});
                $( "#notedatepicker" ).datepicker({dateFormat:'yy-mm-dd'});




            });


            $('#userPayment').on('shown.bs.modal', function () {

            })
        </script>


    @show
</head>

<body>
@yield('body')
</body>
</html>