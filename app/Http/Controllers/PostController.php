<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Illuminate\Support\Str as SupportStr;
use Redirect;
use Storage;
use Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search) {

            
            $posts = Post::join('users', 'author_id', '=', 'users.id')
                ->where ('title', 'like', '%'.$request->search.'%')
                ->orWhere ('descr', 'like', '%'.$request->search.'%')
                ->orWhere ('name', 'like', '%'.$request->search.'%')
                ->orderBy('posts.created_at', 'desc')
                ->get();
                return view('posts.index', compact('posts'));

        }



        $posts = Post::join('users', 'author_id', '=', 'users.id')
                ->orderBy('posts.created_at', 'desc')
                ->paginate(4);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->short_title = Str::length($request->title) > 30 ? Str::substr($request->title, start:0, length:30) . '...' : $request->title;
        $post->descr = $request->descr;
        $post->author_id = rand(1, 4);

        if ($request->file(key:'img')) {
            $path = Storage::putFile($request->file(key:'img'), path:'public');
            $url = Storage::url($path);
            $post->img = $url;

        }
        $post->save();

        return redirect()->route('post.index')->with('success', 'Пост успешно создан!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
