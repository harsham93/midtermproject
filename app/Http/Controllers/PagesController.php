<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('pages.index');
    }
    function about() {
        return view('pages.about');
    }
    function contact() {
        return view('pages.contact');
    }
    function login() {
        return view('pages.login');
    }
    function register() {
        return view('pages.register');
    }

}