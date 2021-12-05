<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\youtubeVideo;

class YoutubeVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new youtubeVideo();
        $post->link = 'https://www.youtube.com/watch?v=JfVOs4VSpmA';
        $post->name = 'SPIDER-MAN: NO WAY HOME - Official Trailer (HD)';
        $post->description = 'We started getting visitors… from every universe. Watch the official trailer for #SpiderManNoWayHome, exclusively in movie theaters December 17.';
        $post->views = 52408901;
        $post->save();

        $post->link = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
        $post->name = 'Rick Astley - Never Gonna Give You Up (Official Music Video)';
        $post->description = 'The official video for “Never Gonna Give You Up” by Rick Astley';
        $post->views = 1105869479;
        $post->save();

        $post->link = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
        $post->name = 'Rick Astley - Never Gonna Give You Up (Official Music Video)';
        $post->description = 'The official video for “Never Gonna Give You Up” by Rick Astley';
        $post->views = 1105869479;
        $post->save();

        $post = new youtubeVideo();
        $post->link = 'https://www.youtube.com/watch?v=JfVOs4VSpmA';
        $post->name = 'SPIDER-MAN: NO WAY HOME - Official Trailer (HD)';
        $post->description = 'We started getting visitors… from every universe. Watch the official trailer for #SpiderManNoWayHome, exclusively in movie theaters December 17.';
        $post->views = 52408901;
        $post->save();

        $post = new youtubeVideo();
        $post->link = 'https://www.youtube.com/watch?v=JfVOs4VSpmA';
        $post->name = 'SPIDER-MAN: NO WAY HOME - Official Trailer (HD)';
        $post->description = 'We started getting visitors… from every universe. Watch the official trailer for #SpiderManNoWayHome, exclusively in movie theaters December 17.';
        $post->views = 52408901;
        $post->save();

        
        
    }
}
