<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function() {
    return 'World';
});
Route::get('/Selamat Datang', function() {
    return 'Selamat Datang';
});
Route::get('/About', function() {
    return 'NIM : 244107020177 
    Nama : I Gusti Agung Made Oka Darmestha';
});
Route::get('/user/{name}', function ($name){
    return 'Nama saya '.$name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId,$commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
Route::get('/articles/{id}', function ($articlesId){
    return 'Halaman Artikel dengan '." ID : ".$articlesId;
});
Route::get('user/{name?}',function ($name='John') {
    return 'Nama saya '.$name;
});
