@extends('layouts.master')
@section('title', 'Search product')
@section('section')
<div class="masthead">
    <div class="container">
        <h1 class="mb-2 text-white">Enter UNIQUE CODE!</h1>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form method="get" action="{{'/search'}}">
                <div class="form-row">
                    <div class="col-12 col-md-9 mb-2 mb-md-0">
                        <input type="search" name="search" class="form-control form-control-lg text-center"
                            placeholder="XXXXXXX">
                    </div>
                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-success">Search</button>
                    </div>
                    @if ($errors->has('search'))
                    <h5 class="text-danger">
                        <strong>{{ $errors->first('search') }}</strong>
                    </h5>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection