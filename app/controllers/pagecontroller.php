<?php
namespace app\controllers;
class pagecontroller{
    public function about(){
        $articles=[
            [
                'title'=>'about',
                'url'=>'about',
                'description'=>'about'
            ],
            [
                'title'=>'about2',
                'url'=>'about2',
                'description'=>'about2'
            ]
        ];
        //return require "app/views/about.views.php";
        return view('about',compact($articles));
    }
}

