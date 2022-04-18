<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function Adminlogin()
    {
        $admin = Admin:: all();

        return \view('pages.login.Adminlogin')->with('admin',$admin);
    }

    public function AdminloginSubmit(Request $request)
    {
        $admin = Admin::where('Name',$request->Name)
                            ->where('Password',$request->Password)
                            ->first();

        //return $admin;
        if($admin)
        {
            $request->session()->put('user',$admin->Name);
            return redirect()->route('AdminDashboard');
        }
        return back();
    }

    public function AdminDashboard()
    {
        return \view('Pages.Admin.AdminDashboard');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('Adminlogin');
    }

    public function ResetPassword(Request $request)
    {
        $admin = Admin::where('Name', $request->Name)->first();

        return \view('pages.login.ResetPassword')->with('admin',$admin);
    }

    public function ResetPasswordSubmit(Request $request)
    {
        $admin = Admin::where('Name', $request->Name)->first();

        $admin->Password = $request->Password;
        $admin->save();

        return redirect()->route('Adminlogin');
    }
}
