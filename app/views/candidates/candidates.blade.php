@extends('/layouts.main')

@section('title')
NAES: List Of Candidates

@stop

@section('body')
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<div class="jumbotron">

  <h1 style="text-align:center;">Candidates</h1>
    @if(Session::has('notification'))
        <div class="alert alert-warning alert-dismissible" role="alert">
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

    <table class="table table-striped">
       <tr><th>Candidate ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Candidate Type</th>
           <th colspan="3"></th></tr>
        @foreach($candidates as $candidate)
            <tr>

                    <td>{{$candidate->id}}</td>
                    <td>{{$candidate->name}}</td>
                    <td>{{$candidate->email}}</td>
                    <td>{{$candidate->candidate_type}}</td>
                    <td><a href="candidates/candidate/{{$candidate->id}}">View</a></td>
                    <td><a href="candidates/edit/{{$candidate->id}}">Edit</a></td>
                    <td>Delete</td>

            </tr>
        @endforeach
    </table>
</div>
</div>
<div class="col-md-2">
</div>
</div><!-- End of row -->
</div> <!-- End of container -->

@stop();