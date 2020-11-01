<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Repos\BrandRepository;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index(Request $request,BrandRepository $repository)
    {
        $data = $repository->search()->getData();
        if ($request->ajax() || $request->expectsJson()){
            return response()->json($data);
        }
        return view('admin.brand.index',compact('data'));
    }

    public function store(BrandRequest $request,BrandRepository $repository)
    {
        dd($request->name);
        $repository->insert($request);
        if ($request->ajax()){
            return response()->json([
                'msg'=>'item is Inserted Successfully'
            ]);

        }
        return back();

    }

    public function destroy(Brand $brand, Request $request)
    {
        dd($brand->delete());
    }
}
