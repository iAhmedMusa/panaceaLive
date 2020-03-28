@extends('layouts.master')
@section('title', 'Product info')
@section('section')
<div class="masthead">
    <div class="container">
        @if(count($products) > 0)
        @foreach($products as $product)
        <h2 class="text-center text-white">{{$product->p_unique_code}}</h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Product Category</th>
                                <th>Product Name</th>
                                <th>Warranty Starts</th>
                                <th>Warranty Ends</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $product->productsCat->cat_name }}</td>
                                <td>{{ $product->productsName->p_name }}</td>
                                <td>{{ $product->created_at->format('d/m/Y') }}</td>
                                <td>{{ $product->created_at->addMonths($product->productsCat->warranty_length)->format('d/m/Y') }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <h4 class="text-center text-white">No product found</h4>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection