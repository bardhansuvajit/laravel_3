<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index() {
        $data = User::where('role', 2)->paginate(10);
        return view('dashboards.admins.users.index', compact('data'));
    }

    public function delete($id) {
        // $delete = DB::table('categories')->where('id', $id)->delete();
        $delete = User::find($id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'User deleted');
        } else {
            return redirect()->back()->with('fail', 'Something happened');
        }
    }
}
