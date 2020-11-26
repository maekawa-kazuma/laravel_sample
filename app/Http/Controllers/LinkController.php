<?php

namespace App\Http\Controllers;
use App\Link;
use App\Http\Requests\LinkRequest;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function submit(LinkRequest $request){
        $link = new link();
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();
        return redirect('/');
    }
}
