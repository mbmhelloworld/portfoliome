<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * contactform
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Projects
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function projects()
    {
        return view('frontend.projects');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('frontend.terms');
    }
}
