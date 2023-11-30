<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ForumController extends Controller
{
    public function index()
    {
        return view('admin/forum/index');
    }
}
