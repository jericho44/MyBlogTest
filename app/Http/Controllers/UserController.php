<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::OrderBy('id', 'asc')->get();

        return view('pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $this->validate($request, [
            'name' => 'required|max:55',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'role' => 'required',
        ]);
        $params['password'] = bcrypt($request['password']);
        $role = $request['role'];
        $params['role'] = (int)$role;

        if (User::create($params)) {
            return redirect()->route('users.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('pages.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $params = $this->validate($request, [
            'name' => 'required|max:55',
            'email' => 'required|email',
        ]);
        if (isset($request['password'])) {
            $params['password'] = bcrypt($request['password']);
        }

        $role = $request['role'];
        $params['role'] = (int)$role;

        $user = User::findOrFail($id);
        if ($user->update($params)) {
            return redirect()->route('users.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users.index');
    }
}
