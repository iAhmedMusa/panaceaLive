<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductsCategory;
use App\ProductsInfo;
use Illuminate\Http\Request;

class productsController extends Controller {

    public function index() {
        return view( 'index' );
    }

    public function getCategoryList() {
        $pCategory = ProductsCategory::pluck( "cat_name", "cat_id" );
        return view( 'addProduct', compact( 'pCategory' ) );
    }

    public function getProductsList( Request $request ) {
        $products = Products::where( "p_cat_id", $request->category_id )->pluck( "p_name", "p_id" );
        return response()->json( $products );
    }

    public function store( Request $request ) {

        $this->validate( $request, [
            'p_cat'         => 'required',
            'p_name'        => 'required',
            'p_unique_code' => 'required|string|max:7|min:7|unique:products_info',
        ], [], [
            'p_cat'         => 'Product Category',
            'p_name'        => 'Product Name',
            'p_unique_code' => 'Unique Code',
        ] );

        $item = new ProductsInfo();
        $item->cat_id = $request->p_cat;
        $item->p_id = $request->p_name;
        $item->p_unique_code = $request->p_unique_code;
        $item->save();

        session()->flash( 'success', 'Product added' );

        return back();
    }

    public function customer() {
        return view( 'customer' );
    }

    public function search( Request $request ) {
        $this->validate( $request, [
            'search' => 'required|string|max:7|min:7',
        ], [], [
            'search' => 'Unique Code',
        ] );
        $search = $request->search;
        $products = ProductsInfo::where( 'p_unique_code', 'like', '%' . $search . '%' )->get();
        return view( 'productsInfo', compact( 'products' ) );
    }

}