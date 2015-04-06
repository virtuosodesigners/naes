@extends('/layouts.main')

@section('title')
    NAES: Payments for {{date('Y-m-d')}}

@stop

@section('body')
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
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="jumbotron">
                    <h1>Payments</h1>
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

                    {{Form::open(array('route'=>'payments.thedaypayment','class'=>'form-horizontal','method'=>'GET'))}}
                    <div class="form-group">


                        <div class="col-sm-4">
                            {{Form::text('filterdatefrom',null,array('class'=>'form-control','id'=>'datepicker','placeholder'=>'From'))}}
                        </div>
                        <div class="col-sm-4">
                            {{Form::text('filterdateto',null,array('class'=>'form-control','id'=>'to','placeholder'=>'To'))}}
                        </div>
                        <div class="col-sm-4">
                        {{Form::submit('Filter',array('class'=>'btn btn-warning'))}}
                            </div>
                    </div>

                    {{Form::close()}}

                        <div id="payments" >





                            <table class="table table-striped">
                                <tr><th>Payment ID</th>
                                    <th>Payment Date</th>
                                    <th>Payment Type</th>
                                    <th>Amount Paid</th>
                                    <th>Candidate's Name</th>
                                </tr>
                                @foreach($payments as $payment)
                                    <tr>

                                        <td>{{$payment->id}}</td>
                                        <td>{{$payment->payment_date}}</td>
                                        <td>{{$payment->payment_type}}</td>
                                        <td>${{$payment->amount}} {{($payment->verify_by)? " - ( <small style='color:green'><i> Verified by : ".$payment->verify_by.'</i></small> )' : ''}} </td>

                                        @foreach(Candidate::where('id',$payment->candidate_id)->get() as $candidate)
                                            <td> {{$candidate->name}}</td>
                                        @endforeach



                                    </tr>
                                @endforeach
                            </table>


                            {{Form::open(array('route'=>'payments.csvpaymentexport','class'=>'form-horizontal','method'=>'GET'))}}
                            {{Form::hidden('filterdatefrom',$filterdatefrom=Request::get('filterdatefrom'))}}
                            {{Form::hidden('filterdateto',$filterdateto=Request::get('filterdateto'))}}
                            {{Form::submit('Export as CSV',array('class'=>'btn btn-success'))}}
                            {{Form::close()}}

                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End of row -->
    </div> <!-- End of container -->

@stop();