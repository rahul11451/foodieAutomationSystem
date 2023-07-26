<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
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
        return view('/login');
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
    public function fetchData(Request $data)
    {
        $fetch = Login::all();
        if ($fetch[0]->sEmail == $data->email && $fetch[0]->sPassword == md5($data->password)) {
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
}
