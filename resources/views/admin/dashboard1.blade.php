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

  

@endsection

@section('scripts')
    
@endsection