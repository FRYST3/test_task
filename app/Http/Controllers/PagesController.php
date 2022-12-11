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

    public function crud($id, Request $request) {
        $user = User::where('id', $id)->first();
        

        return view('user', compact('user'));
    }

    public function userSave(Request $r) {

        User::where('id', $r->get('id'))->update([
            'username' => $r->get('name'),
            'balance' => $r->get('balance'),
            'password' => $r->get('password')
        ]);

        return redirect('/crud/'.$r->get('id'))->with('success', 'Инфорация обновлена!');
    }

    public function usernew(Request $r) {

        User::create([
            'username' => $r->get('name'),
            'balance' => $r->get('balance'),
            'password' => $r->get('password')
        ]);

        return redirect('/')->with('success', 'Создан');
    }

    public function userdelete($id) {

        User::where('id', $id)->delete();

        return redirect('/')->with('success', 'Пользователь удалён');
    }
}
