<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Datatables;

class PagesController extends Controller
{
    public function index() {
        $userget = User::get();
        return view('index', compact('userget'));
    }
}
