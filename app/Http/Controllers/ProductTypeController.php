<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productType = ProductType::paginate(3);
        return  view('admin.pages.product_type.list', ['productType' => $productType]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoryList = Category::where('status', 1)->get();
        return view('admin.pages.product_type.register', ['categoryList' => $categoryList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        //dd($data);
        try {
            $isOk = ProductType::create([
                'name' => $request->name,
                'idCategory' => $request->idCategory,
                'slug' => utf8tourl($request->name),
                'status' => $request->status
            ]);
            //dd($isOk);
            if ($isOk) {
                return redirect()->route('productType.index')->with('thongbao' . 'Đã thêm thành công!');
            } else {
                return back()->with('thongbao' . 'Có lỗi xảy ra trong quá trình xử lý!');
            }
        }catch (\Exception $ex) {
//            return response()->json([
//                'error' => 'Có lỗi xảy ra trong quá trình xử lý',
//            ], 200);
            return back()->with($ex);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductType $productType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductType $productType)
    {
        //
        $data = $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductType $productType)
    {
        //
    }
}
