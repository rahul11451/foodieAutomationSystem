<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personal_info;

class CrudController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function create(Request $data)
    {
        $data->validate([
            'name' => 'required',
            'email' => 'email|required'
        ]);
        $pInfo = new personal_info();
        $pInfo->sName = $data['name'];
        $pInfo->sEmail = $data['email'];
        $pInfo->sMessage = $data['msg'];
        $pInfo->save();
    }
}
