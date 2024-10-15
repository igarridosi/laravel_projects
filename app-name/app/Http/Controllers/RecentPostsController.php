<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecentPostsController extends Controller
{
    public function index($days_ago)
    {
        // Logic to retrieve recent posts based on $days_ago
        return view('posts.recent.index', compact('days_ago'));
    }
}
