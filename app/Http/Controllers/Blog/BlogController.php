<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Arrinsert;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // return view('dashboards.admins.blog.index');
        $data = Blog::paginate(2);
        return view('dashboards.admins.blog.index', compact('data'));
    }
    public function create()
    {
        return view('dashboards.admins.blog.create');
    }
    public function blogCreate(Request $request)
    {
        // return $request->input();
        $request->validate([
            'cat_id' => 'required',
            'title' => 'required|min:4',
            'description' => 'required|min:4',
        ]);

        DB::beginTransaction();

        try {
            $blog = new Blog();
            $blog->cat_id = $request->cat_id;
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->save();





            // $data = [];
            // for ($arr_index = 0; $arr_index < 500000; $arr_index++) {
            //     $custom_index = $arr_index + 1;
            //     array_push($data, [
            //         'name' => 'name'.$custom_index,
            //     ]);
            // }
            // DB::table('arrinserts')->insert($data);

            $data = [];
            for ($arr_index=0; $arr_index < 500000; $arr_index++) {
                $custom_index = $arr_index + 1;
                $data[] = [
                    'name' => 'name'.$custom_index,
                ];
            }
            $chunks = array_chunk($data, 25000, true);

            foreach ($chunks as $data) {
                Arrinsert::insert($data);
            }





            DB::commit();
            return redirect()->back()->with('success', 'Blog added successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something happened');
        }
    }
    public function blogDelete($id)
    {
        $delete = DB::table('blogs')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Blog deleted');
        } else {
            return redirect()->back()->with('fail', 'Something happened');
        }
    }
}
