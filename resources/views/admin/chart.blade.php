@extends('layouts.master')

@section('title')
  Body Temperature Dashboard
@endsection

@section('l3')
    class="active "
@endsection

@section('content')
<div >
  <div >
    <div >
      <div >
        <div >Chart Demo</div>

        

        <hr>
        {!!$pie->html() !!}
      </div>
    </div>
  </div>
</div>
{!! Charts::scripts() !!}


{!! $pie->script() !!}
@endsection

@section('scripts')
    
@endsection