<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// use Validator;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Rule;
// use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('news::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('news::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
    // 'body'=>'required',
            'title'=>'required',
        ]);
        //return view('news::imgInput');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    // public function show($id)
    public function show()
    {
        return view('news::show');
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('news::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function uploadImages()
    {
        $imgName = request()->file->getClientOriginalName();
        request()->file->move(public_path('images'), $imgName);
        return response()->json(['uploaded' => '/images/'.$imgName]);
    }
}
