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
        $url = 'https://fantasyfootball.skysports.com/api/getLeague?lPin=8252775';
        $context = stream_context_create(array(
            'http' => array(
                'method' => "GET",
                'header' =>
                    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n" .
                    "Accept-Language: en-US,en;q=0.8\r\n".
                    "Keep-Alive: timeout=3, max=10\r\n",
                "Connection: keep-alive",
                'user_agent' => "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11",
                "ignore_errors" => true,
                "timeout" => 3
            )
        ));
        $league = file_get_contents($url, false, $context);

        dd($league);
        return view('user.index', ['users' => $users]);
    }
}
