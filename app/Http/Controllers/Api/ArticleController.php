<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MainArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data= MainArticle::all();
    
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
         $data = MainArticle::create([
            'title' => $request->title,
            'image' => $request->image,
            'content' => $request->content
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
        $mainArticle = MainArticle::find($id);
        return $this->sendResponse($mainArticle, 'successful get detail data ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
          $mainArticle = MainArticle::find($id);
          $mainArticle->title = $request->title;
          $mainArticle->image = $request->image;
           $mainArticle->content = $request->content;
            $mainArticle->save();

          return $this->sendResponse($mainArticle, 'successful update data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $mainArticle=  MainArticle::find($id);
         $mainArticle->delete();

        return $this->sendResponse('', 'successful delete data');
    }
}
