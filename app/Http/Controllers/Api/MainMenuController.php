<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MainMenu;
use App\Models\Tags;
use Illuminate\Http\Request;

class MainMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $dataMainMenu = MainMenu::all();
    
       return $this->sendResponse($dataMainMenu, 'successful get all data ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataMainMenu = MainMenu::create([
            'title' => $request->title
        ]);
      
        return $this->sendResponse($dataMainMenu, 'successful create data ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MainMenu $mainMenu)
    {
       
        return $this->sendResponse($mainMenu, 'successful get detail data ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainMenu $mainMenu)
    {
        
         $mainMenu->title = $request->title;
          $mainMenu->save();

          return $this->sendResponse($mainMenu, 'successful update data');
        //  return response()->json([
        //     'data' => $mainMenu
        //  ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainMenu $mainMenu)
    {
         $mainMenu->delete();

        return $this->sendResponse('', 'successful delete data');
    }
}
