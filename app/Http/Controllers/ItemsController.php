<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemsController extends Controller
{
    public static function show() 
    {
        $test = Items::all();
        return $test;
    }

    public static function create(Request $request) 
    {
        $items = new Items;
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

    public static function update($id ,Request $request) 
    {   
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
        return ['Deleted selected items', $items];
        $items->delete();
    }
}
