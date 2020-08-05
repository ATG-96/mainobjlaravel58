@extends('layouts.master')

@section('title')
    Dashboard1-tempcheck
@endsection

@section('l2')
    class="active "
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Registered Roles</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>user_id</th>
              <th>user_name</th>
              <th>line_id</th>
              <th>temp</th> 
              <th>temp_time</th> 
            </thead>
            <tbody>                
              @foreach ($tempcheck as $rowtempcheck)
                <tr>
                <td>{{ $rowtempcheck->user_id }}</td>
                <td>{{ $rowtempcheck->user_name }}</td>
                <td>{{ $rowtempcheck->line_id }}</td>
                <td>{{ $rowtempcheck->temp }}</td>
                <td>{{ $rowtempcheck->temp_time }}</td>                    
                </tr>
              @endforeach                   
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

  

@endsection

@section('scripts')
    
@endsection