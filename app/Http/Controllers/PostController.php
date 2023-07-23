<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostControlloer内にインポートできる
//この場合、App\Models内のPostクラスをインポートしている。
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用
    {
        return $post->get();//$postの中身を戻り値にする。
    }
}