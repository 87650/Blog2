<?php

namespace App\Http\Controllers\Admin\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\IndexAdmin;

class IndexAdminController extends Controller
{
    public function index_admin()
    {
        $categories = DB::table('categories')->get();
        $post = DB::table('posts')->get();

        return view('admin.indexAdmin',['categories'=>$categories], ['posts'=>$post]);

    }
    public function index_admin_category($id)
    {
        $categories = DB::table('categories')->get();
        $post = DB::select('select * from posts where parent_id = ?', [$id]);

        return view('admin.indexcategory',['categories'=>$categories], ['posts'=>$post]);

    }

}
