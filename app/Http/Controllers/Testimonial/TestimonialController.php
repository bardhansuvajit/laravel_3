<?php

namespace App\Http\Controllers\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index() {
        // return view('dashboards.admins.testimonial.index');
        $data = Testimonial::paginate(5);
        return view('dashboards.admins.testimonial.index', compact('data'));
    }

    public function delete($id) {
        $delete = DB::table('testimonials')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Testimonial deleted');
        } else {
            return redirect()->back()->with('fail', 'Something happened');
        }
    }
}
