<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tags::with('subMainMenu')->get();
        return $this->sendResponse($data, 'successful get all data ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Tags::create([
            'title' => $request->title,
        ]);
      
        return $this->sendResponse($data, 'successful create data ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tags = Tags::with('subMainMenu')->where('id', $id)->first();
        return $this->sendResponse($tags, 'successful get detail data ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tags $tags)
    {
            $tags->title= $request->title;
        
            $tags->save();

          return $this->sendResponse($tags, 'successful update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tags $tags)
    {
        $tags->delete();

        return $this->sendResponse('', 'successful delete data');
    }


}
