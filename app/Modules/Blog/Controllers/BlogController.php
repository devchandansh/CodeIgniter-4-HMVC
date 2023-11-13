<?php
namespace App\Modules\Blog\Controllers;

use App\Controllers\BaseController;


class BlogController extends BaseController
{
    public function index(): string
    {
        return view('App\Modules\Blog\Views\home_page');
    }
}

