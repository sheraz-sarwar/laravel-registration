<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class TransferController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $league = file_get_contents('https://fantasyfootball.skysports.com/api/getLeague?lPin=8252775');
        dd($league);
        return view('user.index', ['users' => $users]);
    }
}
