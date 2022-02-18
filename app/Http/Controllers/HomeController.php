<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index() {
        
    //     $name = 'Federico';
    //     $lastname = 'Casartelli';
    //     $students = [
    //         'Giovanni',
    //         'Roberto',
    //         'Francesco'
    //     ];

    //     $data = [
    //         'name'=>$name,
    //         'lastname'=>$lastname,
    //         'students'=>$students
    //     ];
    //     dd($data);
    //     return view('home');
    // }
    
    public function index() {
        $movies = Movie::all();
        // dd($movies);

        $data = [
            'movies' => $movies
        ];
        return view('home', $data);
    }

    // public function movies() {
    //     $movies = Movie::all();
    //     // dd($movies);

    //     $data = [
    //         'movies' => $movies
    //     ];

    //     return view('movies',$data);
    // }

}
