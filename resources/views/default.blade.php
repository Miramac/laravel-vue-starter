@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">   
   {{ (Auth::check()) ? 'Logged in!':'Not logged in!' }}
  </div>
</div>
<router-view></router-view>
@endsection
