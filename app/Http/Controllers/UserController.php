<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Services\UserRegistration;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{

    protected $sentinel;

    protected $userRepository;

    public function __construct()
    {
        // Todo: Get dependency injection working here and move to UserRepository
        $this->sentinel = app('sentinel');
        $this->userRepository = app('sentinel.users');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($this->sentinel->check()) {
            $users = $this->sentinel->getUserRepository()->all();
            return view('user.index', ['users' => $users]);
        }

        return view('user.login');
    }

    /**
     * // Todo: create a login request
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->sentinel->authenticate($credentials)) {
            return view('welcome');
        } else {
            return redirect()->back();
        }
    }

    public function activate($id, $code)
    {
        $user = $this->sentinel->findById($id);

        $activated = $this->userRepository->activate($user, $code);

        if (!$activated) {
            return 'Failed to activate';
        }

        $this->sentinel->login($user);

        return redirect()->route('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @param UserRegistration $registration
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request, UserRegistration $registration)
    {
        $registration->setFirstName($request->input('first_name'))
            ->setLastName($request->input('last_name'))
            ->setEmail($request->input('email'))
            ->setPassword($request->input('password'))
            ->setGender($request->input('gender'))
            ->setDateOfBirth($request->input('date_of_birth'))
            ->register();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
