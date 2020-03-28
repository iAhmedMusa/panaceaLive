@extends('layouts.master')
@section('title', 'Add product')
@section('section')
<div class="masthead">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{'/store-product'}}">
                    @csrf

                    <div class="form-group">
                        <label for="example-url-input" class="h6">Product category</label>
                        <div class="input-group">
                            <select name="p_cat" id="p_cat" class="form-control">
                                <option disabled selected>Select product category</option>
                                @foreach($pCategory as $key => $pCat)
                                <option value="{{ $key }}"> {{ $pCat }} </option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('p_cat'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('p_cat') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="example-url-input" class="h6">Product Name</label>
                        <div class="input-group">
                            <select name="p_name" id="p_name" class="form-control"></select>
                        </div>
                        @if ($errors->has('p_name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('p_name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="example-url-input" class="h6">Unique Code</label>
                        <div class="input-group">
                            <input name="p_unique_code" class="form-control" type="text" placeholder="XXXXXXX">
                        </div>
                        @if ($errors->has('p_unique_code'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('p_unique_code') }}</strong>
                        </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success btn-lg btn-block">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$('#p_cat').change(function() {
    var categoryID = $(this).val();
    if (categoryID) {
        $.ajax({
            type: "GET",
            url: "{{url('products-list')}}?category_id=" + categoryID,
            success: function(res) {
                if (res) {
                    $("#p_name").empty();
                    $("#p_name").append('<option disabled selected>Select the product</option>');
                    $.each(res, function(key, value) {
                        $("#p_name").append('<option value="' + key + '">' + value +
                            '</option>');
                    });

                } else {
                    $("#p_name").empty();
                }
            }
        });
    }
});

@if(session()->has('success'))
    $.notify({
        title: "Success!",
        message: "{{ session()->get('success') }}"
    }, {
    type: 'info'
    });
@endif

</script>

@endsection