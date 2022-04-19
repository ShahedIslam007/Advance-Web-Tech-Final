<?php

namespace App\Http\Controllers;

use App\Models\VendorLogin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVendorLoginRequest;
use App\Http\Requests\UpdateVendorLoginRequest;

class VendorLoginController extends Controller
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
     * @param  \App\Http\Requests\StoreVendorLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendorLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VendorLogin  $vendorLogin
     * @return \Illuminate\Http\Response
     */
    public function show(VendorLogin $vendorLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VendorLogin  $vendorLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(VendorLogin $vendorLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVendorLoginRequest  $request
     * @param  \App\Models\VendorLogin  $vendorLogin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVendorLoginRequest $request, VendorLogin $vendorLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VendorLogin  $vendorLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(VendorLogin $vendorLogin)
    {
        //
    }

    public function Vendorlogin()
    {
        $admin = Vendorlogin:: all();

        return \view('pages.login.Vendorlogin');
    }

    public function VendorloginSubmit(Request $request)
    {
        $admin = Vendorlogin::where('Name',$request->Name)
                            ->where('Password',$request->Password)
                            ->first();

        //return $admin;
        if($admin)
        {
            $request->session()->put('user',$admin->Name);
            return redirect()->route('VendorMessage');
        }
        return back();
    }
}
