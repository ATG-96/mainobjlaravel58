@extends('layouts.master')

@section('title')
    Dashboard-safechaeck
@endsection

@section('l1')
    class="active "
@endsection

@section('content')


  <div class="row">
    <div class="col-9">
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
                <th>is_safe</th>
                <th>safe_location</th> 
                <th>safe_mess</th> 
                <th>time_update</th>                    
              </thead>
              <tbody>                
                @foreach ($safecheck as $rowsafecheck)
                  <tr>
                  <td>{{ $rowsafecheck->user_id }}</td>
                  <td>{{ $rowsafecheck->user_name }}</td>
                  <td>{{ $rowsafecheck->line_id }}</td>
                  <td>{{ $rowsafecheck->is_safe }}</td>
                  <td>{{ $rowsafecheck->safe_location }}</td>
                  <td>{{ $rowsafecheck->safe_mess }}</td> 
                  <td>{{ $rowsafecheck->time_update }}</td>                    
                  </tr>
                @endforeach                   
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class=".col-md-3 .offset-md-3">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Detailed Search</h4>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-success">Safe</button>
          <button type="button" class="btn btn-danger">Not Safe</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-9">
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
                <th>is_safe</th>
                <th>safe_location</th> 
                <th>safe_mess</th> 
                <th>time_update</th>                    
              </thead>
              <tbody>                
                @foreach ($safecheck as $rowsafecheck)
                  <tr>
                  <td>{{ $rowsafecheck->user_id }}</td>
                  <td>{{ $rowsafecheck->user_name }}</td>
                  <td>{{ $rowsafecheck->line_id }}</td>
                  <td>{{ $rowsafecheck->is_safe }}</td>
                  <td>{{ $rowsafecheck->safe_location }}</td>
                  <td>{{ $rowsafecheck->safe_mess }}</td> 
                  <td>{{ $rowsafecheck->time_update }}</td>                    
                  </tr>
                @endforeach                   
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class=".col-md-3 .offset-md-3">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Detailed Search</h4>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-success">Safe</button>
          <button type="button" class="btn btn-danger">Not Safe</button>
        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="col-md-9">
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
              @foreach ($dashtempcheck as $rowtempcheck)
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
  <div class=".col-md-3 .offset-md-3">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Detailed Search</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-success">Safe</button>
        <button type="button" class="btn btn-danger">Not Safe</button>
      </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
    
@endsection