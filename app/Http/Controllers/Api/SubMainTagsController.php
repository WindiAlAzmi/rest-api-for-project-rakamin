<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubMenuTags;
use App\Models\Tags;
use Illuminate\Http\Request;

class SubMainTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = SubMenuTags::all();
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
        //   $data = SubMenuTags::create([
        //     'tags_id' => $request->tags_id,
        //     'sub_main_menus_id' => $request->sub_main_menus_id,
            
        // ]);


        $data = Tags::with('subMainMenu')->get();
        $data->subMainMenu()->attach($request->sub_main_menus_id);


        
      
        return $this->sendResponse($data, 'successful create data ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubMenuTags $subMenuTags)
    {
        return $this->sendResponse($subMenuTags, 'successful get detail data ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubMenuTags $subMenuTags)
    {
            $subMenuTags->tags_id= $request->tags_id;
            $subMenuTags->sub_main_menus_id= $request->sub_main_menus_id;
            $subMenuTags->save();

          return $this->sendResponse($subMenuTags, 'successful update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMenuTags $subMenuTags)
    {
        $subMenuTags->delete();
        return $this->sendResponse('', 'successful delete data');
    }
}
