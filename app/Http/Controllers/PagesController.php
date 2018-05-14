<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 03-Apr-18
 * Time: 13:18
 */

namespace App\Http\Controllers;


use App\Post;

class PagesController extends Controller
{

    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(2)->get();
        return view('welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getWelcome()
    {
        return view('welcome');
    }

    public function getPosts()
    {
        return view('posts.index');
    }
}