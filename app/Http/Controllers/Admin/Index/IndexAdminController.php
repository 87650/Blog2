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
        $categories = DB::table('categories')->get();

        return view('admin.indexAdmin');

    }
}
