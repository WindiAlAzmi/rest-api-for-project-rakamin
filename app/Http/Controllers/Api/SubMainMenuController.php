<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubMainMenu;
use Illuminate\Http\Request;

class SubMainMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubMainMenu::with('tags','mainMenu')->get();
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
        //  $data = SubMainMenu::create([
        //     'title_fitur' => $request->title_fitur,
        //     'content' => $request->content,
        //     'main_menu_id' => $request->main_menu_id
        // ]);
      
        $data = new SubMainMenu();
        $data->title_fitur = $request->title;
        $data->content = $request->content;
        $data->main_menu_id = $request->main_menu_id;
        $data->save();
        $data->tags()->attach($request->tags);
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
        $subMainMenu = SubMainMenu::with('tags', 'mainMenu')->where('id', $id)->get();
        return $this->sendResponse($subMainMenu, 'successful get detail data ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
            $subMainMenu = SubMainMenu::find($id);
            $subMainMenu->title_fitur = $request->title;
            $subMainMenu->content = $request->content;
            $subMainMenu->main_menu_id = $request->main_menu_id;
            $subMainMenu->save();
            $subMainMenu->tags()->sync($request->tags);

          return $this->sendResponse($subMainMenu, 'successful update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subMainMenu=  SubMainMenu::find($id);
        $subMainMenu->tags()->detach();
        $subMainMenu->delete();

        return $this->sendResponse('', 'successful delete data');
    }
}
