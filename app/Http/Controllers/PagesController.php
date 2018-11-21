<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

    public function getIndex(){
            $posts = Post::orderBy('created_at', 'desc')->paginate(4);
            // limit(4)->get();
        
            return view ('pages/welcome')->withPosts($posts);
    }

    public function getSignup(){

        return view ('pages/signup');
        $first = 'Sjoerd';
        $last = 'Veenstra';
        $fullname = $first . " " . $last;
        $email = 's.veenstra89@gmail.com';
        $data = [];
        $data ['email'] = $email;
        $data ['fullname'] = $fullname;
        return view('pages/about')->withData($data);
    }

    public function getLogin(){
        return view ('pages/login');
    }

    public function getAbout(){
        return view ('pages/about');
    }

}

?>
