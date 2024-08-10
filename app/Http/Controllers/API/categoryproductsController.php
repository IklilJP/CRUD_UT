<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class categoryproductsController extends Controller
{ public function index()
    {
        return response()->json(CategoryProduct::all());
    }

    public function show($id)
    {
        return response()->json(CategoryProduct::find($id));
    }

    public function store(Request $request)
    {
        $category = CategoryProduct::create($request->all());
        return response()->json($category, 201);
    }

    public function update(Request $request, $id)
    {
        $category = CategoryProduct::findOrFail($id);
        $category->update($request->all());
        return response()->json($category, 200);
    }

    public function destroy($id)
    {
        CategoryProduct::destroy($id);
        return response()->json("udah ke delete", 200);
    }
}
