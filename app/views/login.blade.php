@extends('/layouts.main')

@section('title')
NAES: Login

@stop

@section('body')
<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">New Adventures Employment  </a>
                
            </div>
            <div style="float: right; margin-top: 15px;">
                <Span style="font-size:17px;font-weight:bold;color:#337ab7;">Candidate Management System</Span>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    User Login
                    <!-- error messages -->
                </h1>
            </div>
<div class="row" style="margin-top: 20px;">
    <div class="col-md-11">

            {{Form::open(array('url'=>'login','class'=>'form-horizontal'))}}
            <div class="form-group">
                <p class="bg-danger">{{ $errors->first('password') }}</p>
            {{Form::label('username','Username',array('class'=>'col-sm-2 control-label'))}}
                <div class="col-sm-10">
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        {{Form::text('username',null,array('class'=>'form-control','id'=>'inputUsername','placeholder'=>'Username'))}}

                    </div>
                    </div>
                </div>

        <div class="form-group">
            {{Form::label('password','Password',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                <div class="input-group">
                    <div class="input-group-addon"><span class="fa fa-key"></span></div>
                    {{ Form::password('password', array('class' => 'form-control','id'=>'inputPassword','placeholder'=>'Password')) }}

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{Form::submit('Login',array('class'=>'btn btn-primary'))}}

            </div>
        </div>
        {{Form::close()}}

                </div>

        </div>
    </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
<div class="col-md-2">
</div>
</div><!-- End of row -->
</div> <!-- End of container -->

@stop();