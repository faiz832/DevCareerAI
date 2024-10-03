<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index(){

        $courses = Course::with(['category', 'teacher', 'students'])->orderByDesc('id')->get();

        return view('welcome', compact('courses'));
    }

    public function course(){

        $courses = Course::with(['category', 'teacher', 'students'])->orderByDesc('id')->get();

        return view('front.course', compact('courses'));
    }

    public function details(Course $course, $courseVideoId){
        return view('front.details', compact('course'));
    }

    public function pricing(){
        if (Auth::user()->hasActiveSubscription()) {
            return redirect()->route('welcome');
        }
        return view('front.pricing');
    }

    public function checkout(){
        if (Auth::user()->hasActiveSubscription()) {
            return redirect()->route('welcome');
        }
        return view('front.checkout');
    }

    public function resume(){
        return view('front.resume');
    }

    public function aboutUs()
    {
        return view('front.about-us');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function program()
    {
        return view('front.program');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function becomeTeacher()
    {
        return view('front.become-teacher');
    }

    public function rulesRequirements()
    {
        return view('front.rules-requirements');
    }

    public function helpCenter()
    {
        return view('front.help-center');
    }

    public function terms()
    {
        return view('front.terms');
    }

    public function privacy()
    {
        return view('front.privacy');
    }
}
