<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\User;
class Dashboard extends Controller
{
    public function index()
    {
        $users     = User::all();
        $PageTitle = "Dashboard ( لوحة التحكم  )";
        $headerLevelProcessTitle1 = "Dashboard ( لوحة التحكم )";
        $headerLevelProcessTitle2 = "Statidtics ( احصائيات )";
        $buttonsRoutsname = $modelViewName = "dashboard";

        return View('Admin.dashboard',compact('users','PageTitle','buttonsRoutsname','headerLevelProcessTitle1','headerLevelProcessTitle2'));
    
    }

}
