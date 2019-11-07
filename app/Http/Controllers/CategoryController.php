<?php

namespace App\Http\Controllers;

//use App\Category;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use function GuzzleHttp\Promise\all;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::paginate(3);
        return  view('admin.pages.category.list', ['category' => $category]);
        //return  view('admin.pages.category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {

//        Category::create([
//            'name'=> $request->name,
//            'slug'=> utf8tourl($request->name),
//            'status'=> 1
//        ]);

        Category::create([
            'name' => $request->name,
            'slug' => utf8tourl($request->name),
            'status' => $request->status
        ]);
        return redirect()->route('category.index');

//        $category = new Category();
//        $category->name = $request->name;
//        $category->slug = utf8tourl($request->name);
//        $category->status = $request->status;
//        $category->save();
        //return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get category by id
        $category = Category::find($id);
        return response()->json($category, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate data
        $validator = Validator::make($request->all(),
            [
                'name' => 'required| min:3|max:255'
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute tối thiểu 3 kí tự!',
                'max' => ':attribute tối đa 255 kí tự!',
                'unique' => ':attribute đã tồn tại trong hệ thống'
            ]
    );
        if($validator->fail()){
            return response()->json(['error'=> true, 'message' => $validator->error()], 200);
        }
        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => utf8tourl($request->name),
            'status' => $request->status
        ]);
        return response()->json(['success' => 'Update thành công!'], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        return response()->json(['success' => 'Xóa thành công!'], 200);
    }
}
