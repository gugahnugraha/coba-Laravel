<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name"  => "Gugah Nugraha",
        "email" => "gnugraha5@gmail.com",
        "image" => "gugah.jpg",
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "author" => "Gugah Nugraha",
        "slug"  => "judul-post-pertama",
        "body"  => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit nobis magni accusamus quibusdam omnis, unde veniam sapiente hic quae sunt. Quas unde sunt repudiandae. Ipsam sed repellendus dolorem inventore perspiciatis saepe. Necessitatibus distinctio, quisquam deserunt maiores rerum iste voluptate. Ipsum dolorum optio mollitia a quibusdam voluptas aspernatur, neque necessitatibus molestias quod perferendis quos, dignissimos totam ex nam explicabo dolorem reiciendis. Cum dolores labore adipisci quas, iure sit consequuntur eligendi distinctio doloribus eius fuga enim animi ullam odit."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "author" => "Gugah Nugraha",
            "slug"  => "judul-post-kedua",
            "body"  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur voluptatum magnam repudiandae dolorem consequatur. Eligendi esse pariatur officiis voluptate ad voluptates nesciunt illum. Ipsa illo magnam delectus nemo, nihil eum iusto iure atque eveniet inventore impedit culpa. Quas nam perspiciatis, exercitationem aliquid enim sapiente ab qui nostrum voluptatum non modi nesciunt tenetur aliquam laboriosam, doloremque a, quae nisi odit architecto corrupti molestias debitis? Adipisci nobis ab voluptatum, alias voluptatibus recusandae impedit. Soluta omnis cupiditate expedita esse numquam. Quidem impedit, laborum quasi dignissimos ex maxime dolor sit nam voluptatum, voluptates assumenda, neque repellat quia debitis! Sapiente expedita modi rem sit, aliquam aut quae eius dolores beatae? Veritatis officiis quam nobis repellat delectus necessitatibus iusto tempore, vel, ipsa blanditiis esse autem voluptatum."
            ]
        
        ];
        
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts

    ]);

    //single post

    Route::get


});
