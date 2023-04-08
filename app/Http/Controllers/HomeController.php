<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\User;
use App\Models\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Projects::count();
        $user = User::count();
        $ownerprojects = Projects::where('owner_id',auth()->id())->count();
        $completedProj = Projects::where('owner_id',auth()->id())->where('status', 2)->count();
        $onprogressProj = Projects::where('owner_id',auth()->id())->where('status', 1)->count();

        return view('home', compact('projects', 'user', 'ownerprojects', 'completedProj', 'onprogressProj'));
    }
}
