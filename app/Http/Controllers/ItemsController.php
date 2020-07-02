<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemsController extends Controller
{
    public static function show() 
    {
        $items = Items::all();
        return $items;
    }
    public static function showItemById($id) 
    {
        $items = Items::find($id);
        return $items;
    }

    public static function create(Request $request) 
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'text' => 'required',
            'pageurl' => 'required',
            'itemauthor' => 'required',
            'hidden' => 'required|integer',
        ]);

        

        $items = new Items;
            $items->title = $request->title;
            $items->subtitle = $request->subtitle;
            $items->text = $request->text;
            $items->imageurl = $request->imageurl;
            $items->pageurl = $request->pageurl;
            $items->itemauthor = $request->itemauthor;
            $num = $request->hidden;
            $hidden = (int)$num;
            $items->hidden = $request->hidden;
            $items->save();
        return $items;
    }

    public static function update($id ,Request $request) 
    {   
        $validatedData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'text' => 'required',
            'pageurl' => 'required',
            'itemauthor' => 'required',
            'hidden' => 'required|integer',
        ]);
        
        $items = Items::find($id);
            $items->title = $request->title;
            $items->subtitle = $request->subtitle;
            $items->text = $request->text;
            $items->imageurl = $request->imageurl;
            $items->pageurl = $request->pageurl;
            $items->itemauthor = $request->itemauthor;
            $items->hidden = $request->hidden;
        $items->save();
        return $items;
    
    }

    public static function delete($id, Request $request)
    {
        $items = Items::find($id);
        $items->delete();
        return ['Deleted selected items', $items];
    }
}
