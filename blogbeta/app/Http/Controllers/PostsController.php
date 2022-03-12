<?php

namespace App\Http\Controllers;

use App\Models\Xp;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    //
    public function index(){
        
        //$posts = DB::select('select * from posts WHERE id = 7');
        //forma mais correcta de escrever 
        //$posts = DB::select('select * from posts WHERE id = ?', [7]);
        //outra forma ainda 
        // $posts = DB::select('select * from posts WHERE id = :id', ['id'=>7]);
        // dd($posts);

        $id = 7;

        //post com $id=7/////////////////////////////////////////// WHERE /////////////////////////////
        // $posts = DB::table('posts')
        //                 ->where('id',$id)
        //                 ->get();

        //todos os body de todos os posts///////////////////////// SELECT /////////////////////////////
        // $posts = DB::table('posts')
        //                 ->select('body')
        //                 ->get();

        //posts depois ou antes de agora///////////////////////// WHERE /////////////////////////////
        // $posts = DB::table('posts')
        //                 ->where('created_at','>',now()->subDay())
        //                 ->get();

        //posts com titulo Miss  antes de agora///////////////////////// ORWHERE /////////////////////////////
        // $posts = DB::table('posts')
        //                 ->where('created_at','<',now()->subDay())
        //                 ->orWhere('title', 'Miss')
        //                 ->get();

        ///////////////////////// WHERE //////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 ->where('id', [1,5])
        //                 ->get();

            ///////////////////////// WHERE NOT NULL //////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 ->whereNotNull('title')
        //                 ->get();

        //Raw nao recomendado por segurança
        // $posts = DB::table('posts')
        //                 ->whereRaw('title')
        //                 ->get();

        //distinct apenas os diferentes    ///////////////////////// DISTINCT ////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 ->select('title')
        //                 ->distinct()
        //                 ->get();

        ///////////////////////// ORDER BY ////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 ->orderBy('title','desc')
        //                 ->get();

        ///////////////////////// LATEST ////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 ->latest()
        //                 ->get();

        ///////////////////////// OLDEST ////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 ->oldest()
        //                 ->get();

        ///////////////////////// RANDOM  ////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 ->inRandomOrder()
        //                 ->get();

        ///////////////////////// FIRST  ////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 ->orderBy('created_at','desc')
        //                 ->first();

        // ///////////////////////// FIND  ////////////////////////////////////////////////////////////////////////
        // $id=99;
        // $posts = DB::table('posts')
        //                 ->find($id);

        ///////////////////////// COUNT   ////////////////////////////////////////////////////////////////////////
        // $id=9;
        // $posts = DB::table('posts')
        //                 //->where('id',$id)
        //                 ->count();

        ///////////////////////// MIN MAX SUM  ////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
        //                 //->where('id',$id)
        //                 //->min('id');
        //                 //->max('id');
        //                 ->sum('id');
                      

        ///////////////////////// INSERT //////////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
                
        //                 ->insert([
        //                     'title'=>'mais um post', 
        //                     'body'=>'corpo aqui'
        //                 ]);

        ///////////////////////// UPDATE //////////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
                
        //                 ->where('id','=',5)
        //                 ->update([
        //                     'title'=>'mais um post alterado', 
        //                     'body'=>'corpo aqui asdaddsaaadadaad'
        //                 ]);

        ///////////////////////// DELETE //////////////////////////////////////////////////////////////////////////////
        // $posts = DB::table('posts')
                
        //                 ->where('id','=',8)
        //                 ->delete();

        // dd($posts);

        $posts = Post::all();
        $users = User::all();
        $xp = Xp::all();
        $tags = Tag::all();
        foreach ($posts as $u){
            // dd($u->tags);
        }
        
        return view ('posts.index', compact('posts','users','tags'));

    }
}
