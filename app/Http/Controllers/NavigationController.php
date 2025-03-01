<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Project;
use App\Models\Setting;
use App\Models\TechStack;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view("layouts.home", [
            "user" => Setting::first(),
            "projects" => Project::latest()->take(6)->get(),
        ]);
    }

    public function about()
    {
        return view("layouts.about",[
            "user" => Setting::first(),
            "educations" => Education::get(),
            "experiences" => Experience::get(),
            "techstasks" => TechStack::get(),
        ]);
    }

    public function photo()
    {
        return view("layouts.photo",[
            "user" => Setting::first(),
            "photos" => Image::latest()->get(),
        ]);
    }

    public function project()
    {
        return view("layouts.project",[
            "user" => Setting::first(),
            "projects" => Project::latest()->get(),
        ]);
    }
}
