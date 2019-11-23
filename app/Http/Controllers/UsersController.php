<?php

namespace App\Http\Controllers;

use App\Genres;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function getData(\Illuminate\Http\Request $request)
    {
        $columns = ['users.id', 'users.name'];

        $limit = $request->input('length');
        $start = $request->input('start');
        $orders = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('searchs');
        $args = [];
        $args[] = ['genres.name', 'like', "%$search%"];


        $total = Genres::count();

        $data = Genres::where($args)->select('genres.*')
            ->offset($start)
            ->limit($limit)
            ->orderBy($orders, $dir)
            ->get();


        foreach ($data as $key => $value) {
            $data[$key]['create'] = date('d-m-Y', strtotime($value['created_at']));

        }
        $json_data = [
            'draw' => intval($request->input('draw')),
            'recordsTotal' => intval($total),
            'recordsFiltered' => intval($total),
            'data' => $data,
        ];


        return response()->json($json_data, 200);
    }

    public function add()
    {
        return view('admin.users.add');
    }

    public function update()
    {
        return view('admin.users.edit');
    }
}
