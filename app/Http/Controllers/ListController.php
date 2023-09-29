<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $data = ListModel::all();
        return view('list.index', ['data'=>$data]);
    }
}
