@extends('layouts.master')

@section('title')
    Dashboard|Funda IT
@endsection

@section('l1')
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
          
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
            <label class="custom-control-label" for="defaultUnchecked" value="safe">Safe</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
            <label class="custom-control-label" for="defaultChecked" value="notsafe">Not Safe</label>
          </div>

          

          <a href="/dashboardsafe/"class="btn btn-success">Go</a>
          
        </div>
      </div>
    </div>
  </div>
</div>

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
  </div>

@endsection

@section('scripts')
    
@endsection