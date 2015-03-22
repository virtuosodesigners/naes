@extends('/layouts.main')

@section('title')
    NAES: Welcome

@stop

@section('body')
    <div class="home-banner">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">

            <div class="jumbotron">
                <center>
                    <h1 style="font-size: 35px !important;color:orange !important;position:relative;bottom:20px !important;">New Adventures Employment Services</h1>

                    <h1 style="font-size: 30px !important;position:relative;bottom:10px !important;">Candidate Management System</h1>

                <p><a class="btn btn-primary btn-lg" href="login" role="button">Log In</a></p>
                </center>
            </div>
</div>

        </div><!-- End of row -->
    </div> <!-- End of container -->
    </div>
@stop();