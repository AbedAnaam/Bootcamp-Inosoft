<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductList()
    {
        $path = base_path(). "/Mocking/product_list.json";
        $json = json_decode(file_get_contents($path), true);
        return response()->json($json);
    }

    public function addProductList(Request $request)
    {
        $path = base_path(). "/Mocking/product_list.json";
        $json = json_decode(file_get_contents($path), true);
        array_push($json, $request->post());

        return response()->json($json);
    }
}
