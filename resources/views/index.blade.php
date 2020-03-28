@extends('layouts.master')
@section('title', 'Panacea Live')
@section('section')
<dive class="masthead">
    <div class="container text-center my-auto">
      <h1 class="mb-20 text-white">Panacea Live</h1>
        <a class="btn btn-info btn-xl" href="{{'/add-product'}}">Admin</a>
        <a class="btn btn-info btn-xl" href="{{'/customer'}}">Customer</a>
    </div>
</dive>
@endsection