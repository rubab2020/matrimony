<?php

namespace App\Http\Controllers\Admin;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all()->pluck('name', 'name')->toArray();

        return view('admin.users.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:8|confirmed',
        ]);

        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

            $user->givePermissionTo($request->input('permissions'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors("Something went wrong");
        }

        return redirect()->route('admin.users.index')
            ->with('success', "Successfully created user");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $permissions = Permission::all()->pluck('name', 'name')->toArray();

        return view('admin.users.edit', compact('user', 'permissions'));
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
        try {
            $user = User::find($id);

            if ($user == null)
                return redirect()->back()
                    ->withErrors("User Not Found");

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password') ? Hash::make($request->input('password')) : $user->password;

            $user->save();

            if ($user)
                $user->syncPermissions($request->input('permissions'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()
                ->withErrors("Something went wrong");
        }

        return redirect()->route('admin.users.index')
            ->with('success', "Successfully updated user");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user == null)
            return redirect()->back()
                ->withErrors("User Not Found");

        if ($user->delete()) {
            return redirect()->route('admin.users.index')
                ->with('success', "Successfully deleted user");
        }

        return redirect()->back()
            ->withErrors("Something went wrong");
    }
}
