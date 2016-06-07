@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">   
        <router-view></router-view>
            <hello></hello>
    </div>
</div>
@endsection
