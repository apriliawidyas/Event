<?php
namespace App\Http\Controllers;

use App\event;
use App\ModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    //
    public function index(){

        return view('Admin.home');
    }

}