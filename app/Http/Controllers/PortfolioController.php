<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost as StorePostRequest;
use App\Http\Requests\UpdatePost as UpdatePostRequest;
use Auth;
use Gate;

class PortfolioController extends Controller
{
    /**
     * Show list of articles with pagination
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $works = Work::with('skills')->published()->orderBy('updated_at', 'DESC')->paginate(5);
        if(count($works) == 0) {
            $works = 'Нет работ';
        }
        return view('portfolio.index', compact('works'));
    }
//
//    /**
//     * Show form to create a new post
//     *
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//    public function create()
//    {
//        return view('posts.create');
//    }
//
//    /**
//     * Store a new post
//     *
//     * @param StorePostRequest $request
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function store(StorePostRequest $request)
//    {
//        $data = $request->only('title', 'body', 'image');
//        $data['slug'] = str_slug($data['title']);
//        $data['user_id'] = Auth::user()->id;
//        $data['image'] = '';
//        $post = Post::create($data);
//        return redirect()->route('edit_post', ['id' => $post->id]);
//    }
//
//    /**
//     * Show list of drafts with pagination
//     *
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//    public function drafts()
//    {
//        $posts = Post::unpublished()->paginate(5);
//        if(count($posts) == 0) {
//            $posts = 'Нет черновиков';
//        }
//        return view('posts.drafts', compact('posts'));
//    }
//
//    /**
//     * Show form to edit selected post
//     *
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//    public function edit(Post $post)
//    {
//        return view('posts.edit', compact('post'));
//    }
//
//    /**
//     * Store updated post
//     *
//     * @param Post $post
//     * @param UpdatePostRequest $request
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function update(Post $post, UpdatePostRequest $request)
//    {
//        $data = $request->only('title', 'body', 'image');
//        $data['slug'] = str_slug($data['title']);
//        $data['image'] = '';
//        $post->fill($data)->save();
//        return redirect()->route('list_posts');
//    }
//
//    /**
//     * Publish selected post
//     *
//     * @param Post $post
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function publish(Post $post)
//    {
//        $post->published = true;
//        $post->save();
//        return back();
//    }
//
//    /**
//     * Unpublish selected post
//     *
//     * @param Post $post
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function unPublish(Post $post)
//    {
//        $post->published = false;
//        $post->save();
//        return back();
//    }
//
//    /**
//     * Show selected post
//     *
//     * @param $slug
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//    public function show($slug)
//    {
//        $post = Post::with('owner')->published()->where('slug', $slug)->first();
//        $post->increment('views');
//        $post->save();
//        if($post) {
//            return view('posts.show', compact('post'));
//        } else {
//            abort(404);
//        }
//    }
}
