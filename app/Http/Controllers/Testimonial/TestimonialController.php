<?php

namespace App\Http\Controllers\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index() {
        // return view('dashboards.admins.testimonial.index');
        $data = Testimonial::paginate(5);
        return view('dashboards.admins.testimonial.index', compact('data'));
    }
}
