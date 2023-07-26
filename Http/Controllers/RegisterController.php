<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function index()
    {
        return view('/register');
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function store(Request $data)
    {
        // $data->validate([
        //     'name'=> 'reuqired',
        //     'email'=> 'required|email',
        //     'password'=> 'required',
        //     'confirmed_password'=> 'required|same:password'
        // ]);
        $reTable = new Register();
        $reTable->sName = $data->name;
        $reTable->sEmail = $data->email;
        $reTable->sPassword = md5($data->password);
        $reTable->sRePassword = md5($data->password_confirmation);
        $reTable->save();

        return redirect()->back();
    }
}
