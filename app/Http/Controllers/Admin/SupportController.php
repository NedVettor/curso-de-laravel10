<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
        dd($supports);

        return view('admin/supports/index',compact('supports'));
    }
}
