<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function blog_category() {
        $data = Category::paginate(1);
        return view('dashboards.admins.category-blog', compact('data'));
    }

    public function blog_category_create(Request $request) {
        // return $request->input();
        $request->validate([
            'category' => ['required', 'string', 'min:4', 'max:255', 'unique:categories,category_name'],
        ]);

        $category = new Category();
        $category->category_name = $request->category;

        if ($category->save()) {
            return redirect()->back()->with('success', 'Category created');
        } else {
            return redirect()->back()->with('error', 'Something happened');
        }
    }

    public function blog_category_delete($id) {
        $delete = DB::table('categories')->where('id', $id)->delete();
        return redirect()->back();
    }
}
