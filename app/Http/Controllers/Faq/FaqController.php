<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    function index() {
        $data = Faq::paginate(5);
        return view('dashboards.admins.faq.index', compact('data'));
    }
}
