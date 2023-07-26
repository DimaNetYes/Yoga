<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class PostController extends Controller
{

    public $post;
    public $users;
    public $links;
    public function __construct(){
            $this->links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];
    }
    
    public function show($id){
        return view('post.show', ['id' => $id, 'isAuth' => false, 'links' => $this->links]);
    }

    public function noch(){
        $col = collect([1, 2, 3, 4, 5]);
        $mul = $col->map(function($item, $key){
            return $item * 2;
        });


        return view('post.noch', ['txt' => 'smth txt', 'mul' => $mul]);
    }

    public function auth(){

    }
    
}
