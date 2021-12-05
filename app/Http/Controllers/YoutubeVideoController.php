<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\youtubeVideo;

class YoutubeVideoController extends Controller
{
    public function showVideos(){
        $videos = youtubeVideo::all();
        return view('details', ['videos'=>$videos]);
    }
}
