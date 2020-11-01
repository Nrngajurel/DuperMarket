<?php

namespace App\Http\Controllers\Admin;

use App\Filter;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Repos\FilterRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FilterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param FilterRepository $repository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(Request $request,FilterRepository $repository)
    {
        $data = $repository->search()->getData();
        if ($request->ajax() || $request->expectsJson()){
            $data = view('admin.filters.filter_list')->with($data)->render();
            return response()->json($data);
        }
        return view('admin.filters.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FilterRequest $request
     * @param FilterRepository $repository
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FilterRequest $request, FilterRepository $repository)
    {
        $repository->insert((array)$request->all());
        if ($request->isJson() || $request->expectsJson()){
            return response()->json([
                'result'=>true,'msg'=>'data inserted successfully'
            ]);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function show(Filter $filter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function edit(Filter $filter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Filter $filter
     * @param FilterRepository $repository
     * @return void
     */
    public function update(Request $request, Filter $filter, FilterRepository $repository)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filter $filter)
    {
        if (Arr::isAssoc($filter)){

        }
        $filter->delete();
    }
}
