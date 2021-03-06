@extends('/layouts.main')

@section('title')
NAES: Login

@stop

@section('body')
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<div class="jumbotron">
  <h1 style="text-align:center;">Users</h1>
    <table class="table table-striped">
       <tr><th>Candidate ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Candidate Type</th>
           <th colspan="2"></th></tr>
        @foreach($candidates as $candidate)
            <tr>

                    <td>{{$candidate->id}}</td>
                    <td>{{$candidate->name}}</td>
                    <td>{{$candidate->email}}</td>
                    <td>{{$candidate->candidate_type}}</td>
                    <td><a href="/user/{{$user->id}}/edit">Edit</a></td>
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