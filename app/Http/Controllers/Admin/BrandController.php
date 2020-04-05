<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Repos\BrandRepository;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index(BrandRepository $brandRepository)
    {
        $data = $brandRepository->search()->getData();
        return view('admin.brands.index', compact('data'));
    }
}
