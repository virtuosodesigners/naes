@extends('/layouts.main')

@section('title')
NAES: {{$candidate->name}}

@stop

@section('body')

<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand" href="#">New Adventures Employment</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/candidates">View All Candidates</a></li>
                    <li><a href="/candidates/addcandidate">Add Candidate</a></li>
                    <li><a href="/allpayments">Payments</a></li>


                </ul>

                {{Form::open(array('route'=>'candidates.index','class'=>'navbar-form navbar-left','method'=>'GET'))}}
                <div class="form-group">


                    {{Form::text('searchf',null,array('class'=>'form-control','id'=>'searchf','placeholder'=>'Search Candidate'))}}
                </div>


                {{Form::submit('Search',array('class'=>'btn btn-default'))}}



                {{Form::close()}}



                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout">Logout</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-9">
<div class="jumbotron">
    <h1>{{$candidate->name}}</h1>
    @if(Session::has('notification'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('notification')}}
        </div>
    @endif

    @if(Session::has('danger'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('danger')}}
        </div>
    @endif
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#candidate">Candidate Information</a></li>
        <li><a data-toggle="tab" href="#payments">Payments</a></li>

    </ul>
    <div class="tab-content">
        <div id="candidate" class="tab-pane fade in active">

    <div class="row">
    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item"><b>Address :</b> {{$candidate->address}}</li>
            <li class="list-group-item"><b>Telephone Number :</b> {{$candidate->tel}}</li>
            <li class="list-group-item"><b>Email Addreess :</b> {{$candidate->email}}</li>
            <li class="list-group-item"><b>Candidate Type :</b> {{$candidate->candidate_type}}</li>
            <li class="list-group-item"><b>Passport Number :</b> {{$candidate->passport}}</li>
            <li class="list-group-item"><b>Passport Expiry Date :</b> {{$candidate->passportexpiry}}</li>
            <li class="list-group-item"><b>Telephone :</b> {{$candidate->tel1}}</li>
            <li class="list-group-item"><b>Orientation Date :</b> {{ $candidate->orientationdate}}</li>
            <li class="list-group-item"><b>Job interview Date :</b> {{$candidate->interviewdate}}</li>
            <li class="list-group-item"><b>Medical Date :</b> {{$candidate->medicaldate}}</li>
            <li class="list-group-item"><b>CBC :</b> {{$candidate->cbc}}</li>
            <li class="list-group-item"><b>Embassy Date :</b> {{$candidate->embassydate}}</li>
            <li class="list-group-item"><b>Travel Date :</b> {{$candidate->traveldate}}</li>
            <li class="list-group-item"><b>Employer :</b> {{$candidate->employer}}</li>
            <li class="list-group-item"><b>Position 2 :</b> {{$candidate->position2}}</li>
            <li class="list-group-item"><b>Passport Issue Date :</b> {{$candidate->passissuedate}}</li>
            <li class="list-group-item"><b>Emergency Contact :</b> {{$candidate->emergency}}</li>
            <li class="list-group-item"><b>Emergency Contact Address :</b> {{$candidate->emergencyaddress}}</li>

        </ul>


    </div>
    <div class="col-md-6">



        <ul class="list-group">
            <li class="list-group-item" style="height:310px;">
                <img src="{{'/imagescan/'.$candidate->candidatephoto}}" class="img-rounded" style="float: right;margin-bottom:5px;" />

            </li>
            <li class="list-group-item"><b>Applicant Contract? :</b> {{($candidate->contract==1)?'Yes':'No'}}</li>
            <li class="list-group-item"><b>Passport Pictures? :</b> {{($candidate->passpictures==1)?'Yes':"No"}}</li>
            <li class="list-group-item"><b>Passport? :</b> {{($candidate->passport1==1)?'Yes':'No'}}</li>
            <li class="list-group-item"><b>Recommendations/Reference Letters? :</b> {{($candidate->recommendations==1)?'Yes':'No'}}</li>
            <li class="list-group-item"><b>Registration Fee? :</b> {{($candidate->regfee==1)?'Yes':'No'}}</li>
            <li class="list-group-item"><b>Visa? :</b> {{($candidate->visa==1)?'Yes':'No'}}</li>



        </ul>
<!--- add modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#userPayment">
            Add Payment
        </button>


        <div class="modal fade" id="userPayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h1 class="modal-title" id="myModalLabel">Add Payment</h1>
                    </div>
                    <div class="modal-body">
                        {{Form::open(array('route'=>'payments.store','class'=>'form-horizontal'))}}

                        {{Form::hidden('candidateid',$candidate->id)}}
                        {{Form::hidden('manager','supermike')}}

                        <div class="form-group">

                            {{Form::label('inputamount','Amount',array('class'=>'col-sm-2 control-label'))}}
                            <div class="col-sm-10">
                                <div class="input-group">
                                <span class="input-group-addon">$</span>
                                {{Form::number('amount',null,array('class'=>'form-control','id'=>'inputamount','placeholder'=>'Enter Payment Amount'))}}

                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            {{Form::label('inputpaymentdate','Payment Date',array('class'=>'col-sm-2 control-label'))}}
                            <div class="col-sm-10">
                                {{Form::text('paymentdate',null,array('class'=>'form-control','id'=>'datepicker','placeholder'=>'Enter Payment Date'))}}
                            </div>
                        </div>
                        <div class="form-group">

                            {{Form::label('inputpaymenttype','Payment Type',array('class'=>'col-sm-2 control-label'))}}
                            <div class="col-sm-10">
                                {{Form::select('paymenttype',
                                array(
                                'Registration Fee'=>'Registration Fee',
                                'Program Fee'=>'Program Fee',
                                'Miscellaneous Sales'=>'Miscellaneous Sales')
                                ,null,array(
                                'class'=>'form-control',
                                'id'=>'inputUserType',
                                'placeholder'=>'Username'))}}
                            </div>
                        </div>
                        <div class="form-group">

                            {{Form::label('manager','Manager Username',array('class'=>'col-sm-2 control-label'))}}
                            <div class="col-sm-10">
                                {{Form::text('manager',null,array('class'=>'form-control','id'=>'manager','placeholder'=>'Manager Username'))}}
                            </div>
                        </div>

                        <div class="form-group">

                            {{Form::label('inputverifyycode','Code',array('class'=>'col-sm-2 control-label'))}}
                            <div class="col-sm-10">
                                {{Form::text('vercode',null,array('class'=>'form-control','id'=>'inputverifyycode','placeholder'=>'Enter Verification Code'))}}
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {{Form::submit('Add Payment',array('class'=>'btn btn-primary'))}}
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>

        <!-- End modal-->

    </div>
    </div>
        </div>

        <div id="payments" class="tab-pane fade">
            <h4>List of payments</h4>




            <table class="table table-striped">
                <tr><th>Payment ID</th>
                    <th>Payment Date</th>
                    <th>Payment Type</th>
                    <th>Amount Paid</th>
                   </tr>
                @foreach(Candidate::findorFail($candidate->id)->payment as $payment)
                    <tr>

                        <td>{{$payment->id}}</td>
                        <td>{{$payment->payment_date}}</td>
                        <td>{{$payment->payment_type}}</td>
                        <td>${{$payment->amount}} {{($payment->verify_by)? " - ( <small style='color:green'><i> Verified by : ".$payment->verify_by.'</i></small> )' : ''}} </td>


                    </tr>
                @endforeach
            </table>


            </div>
        </div>

</div>
</div>
<div class="col-md-1">
</div>
</div><!-- End of row -->
</div> <!-- End of container -->

@stop();