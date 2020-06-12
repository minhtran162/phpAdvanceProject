<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Nation;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsData = Product::all();
        $nationsData = Nation::all();
        $brandsData = Brand::all();
        $typesData = Type::all();

        return view('admin.product.index', [
            'productsData' => $productsData,
            'brandsData' => $brandsData,
            'nationsData' => $nationsData,
            'typesData' => $typesData
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return route('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $fileName = $this->doUpload($request);
        $product = Product::create(array_merge($request->all(), ["image" => "http:\\\\localhost:8000\upload\\".$fileName]));
        if ($product) {
            return redirect('admin/products');
        }
        return redirect()->route('products.create');
    }
    
    private function doUpload(Request $request)
    {
        $fileName = "";
        //Kiểm tra file
        if ($request->file('image')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file
			
			// Filename cực shock để khỏi bị trùng
			$fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
						
			// Thư mục upload
			$uploadPath = public_path('/upload'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$request->file('image')->move($uploadPath, $fileName);
		}
		else {
        }
        return $fileName;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product = \App\Models\Product::find($id);
        // return view('products.show', array('product' => $product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return route('products.update', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $edit = Product::find($id);
        $edit->update($request->all());
        if ($edit) {
            return redirect()->route('products.index');
        }
        return redirect()->route('products.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect('admin/products');
    }
}
