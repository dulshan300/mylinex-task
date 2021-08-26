<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index ()
    {      
    
        $query = 'SELECT p.id ,COUNT(c.id) AS count FROM posts p LEFT JOIN comments c ON c.post_id=p.id GROUP BY p.id ORDER BY count DESC';

        $res = \DB::select($query);
        
        $posts = [];        

        foreach($res as $row){
            $post = \App\Post::find($row->id);
            $post->has_comments =  $row->count;
            $posts[] = $post;
        }

        return view('posts',['posts'=>$posts]);
    }

    public function search (Request $r)
    {           
        
        $query = 'SELECT p.id ,COUNT(c.id) AS count FROM posts p LEFT JOIN comments c ON c.post_id=p.id WHERE p.description LIKE "%'.$r->q.'%" OR c.`comment` LIKE "%'.$r->q.'%" GROUP BY p.id ORDER BY count DESC';
        $res = \DB::select($query);
        $posts = [];        

        foreach($res as $row){
            $post = \App\Post::find($row->id);
            $post->has_comments =  $row->count;
            $posts[] = $post;
        }      


        return view('posts',['posts'=>$posts]);
    }
}
