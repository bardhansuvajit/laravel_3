<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    function index() {
        $data = Faq::paginate(5);
        return view('dashboards.admins.faq.index', compact('data'));
    }

    public function delete($id) {
        $delete = DB::table('faqs')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'FAQ deleted');
        } else {
            return redirect()->back()->with('fail', 'Something happened');
        }
    }
}
