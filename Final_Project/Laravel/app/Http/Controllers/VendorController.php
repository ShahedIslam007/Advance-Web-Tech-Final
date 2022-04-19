<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVendorRequest;
use App\Http\Requests\UpdateVendorRequest;

class VendorController extends Controller
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
     * @param  \App\Http\Requests\StoreVendorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVendorRequest  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVendorRequest $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('ValidAdmin');
    }

    public function VendorCreate()
    {
        return \view('pages.Vendor.VendorCreate');
    }

    public function VendorAdd(Request $request)
    {
        $rules= [
                'Name' => 'required|min:4|max:20',
                'CompanyName' => 'required|min:4|max:20',
                'Email' => 'required|email',
                'Phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'Address' => 'required',
                'id'=> 'required'
        ];
        $messages= [
                'Phone.required' => 'Phone is required!',
                'Phone.regex' => 'Invalid phone number!',
                'Address.required' => 'Address is required!',
                'Name.required' => 'Name is required!',
                'CompanyName.required' => 'Company Name is required!',
                'Email.required' => 'Email is required!',
                'Email.email' => 'Invalid email address!',
                'Name.min' => 'Insert more than 5 characters!',
                'Name.max' => 'Insert less than 20 characters!',
                'CompanyName.min' => 'Insert more than 5 characters!',
                'CompanyName.max' => 'Insert less than 20 characters!',
                'id.required'=> 'Please Fill-Up the ID Field'
        ];

        $this->validate($request,$rules,$messages);

            $vendor = new Vendor();
            $vendor->Name = $request->Name;
            $vendor->CompanyName = $request->CompanyName;
            $vendor->id = $request->id;
            $vendor->Phone = $request->Phone;
            $vendor->Email = $request->Email;
            $vendor->Address = $request->Address;
            $vendor->save();

            return \view('pages.Admin.AdminDashboard');
    }

    public function VendorList()
    {
        $vendors = Vendor:: all();

        return \view('pages.Vendor.VendorList')->with('vendors',$vendors);
    }

    public function VendorEdit(Request $request)
    {
        $vendor = Vendor::where('id', $request->id)->first();

        return view('pages.Vendor.VendorEdit')->with('vendor', $vendor);
    }

    public function VendorEditSubmitted(Request $request)
    {

        $vendor = Vendor::where('id', $request->id)->first();

        $vendor->Name = $request->Name;
        $vendor->CompanyName = $request->CompanyName;
        $vendor->Phone = $request->Phone;
        $vendor->Email = $request->Email;
        $vendor->Address = $request->Address;
        $vendor->save();

        return redirect()->route('VendorList');
    }

    public function VendorDelete(Request $request)
    {
        $vendor = Vendor::where('id', $request->id)->first();
        $vendor->delete();
        
        return redirect()->route('VendorList');
    }
}
