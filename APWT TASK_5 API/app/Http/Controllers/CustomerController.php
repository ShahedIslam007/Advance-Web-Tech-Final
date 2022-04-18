<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('ValidAdmin');
    }

    public function CustomerCreate()
    {
        return \view('pages.Customer.CustomerCreate');
    }

    public function CustomerAdd(Request $request)
    {
        $rules= [
                'Name' => 'required|min:4|max:20',
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
                'Email.required' => 'Email is required!',
                'Email.email' => 'Invalid email address!',
                'Name.min' => 'Insert more than 5 characters!',
                'Name.max' => 'Insert less than 20 characters!',
                'id.required'=> 'Please Fill-Up the ID Field'
        ];

        $this->validate($request,$rules,$messages);

            $customers = new Customer();
            $customers->Name = $request->Name;
            $customers->id = $request->id;
            $customers->Phone = $request->Phone;
            $customers->Email = $request->Email;
            $customers->Address = $request->Address;
            $customers->save();

            return \view('pages.Admin.AdminDashboard');
    }

    public function CustomerList()
    {
        $customers = Customer:: all();

        return \view('pages.Customer.CustomerList')->with('customers',$customers);
    }

    public function CustomerDelete(Request $request)
    {
        $customer = Customer::where('id', $request->id)->first();
        $customer->delete();
        
        return redirect()->route('CustomerList');
    }

    public function CustomerEdit(Request $request)
    {
        $customer = Customer::where('id', $request->id)->first();

        return view('pages.Customer.CustomerEdit')->with('customer', $customer);;
    }

    public function CustomerEditSubmitted(Request $request)
    {

        $customer = Customer::where('id', $request->id)->first();

        $customer->Name = $request->Name;
        $customer->Phone = $request->Phone;
        $customer->Email = $request->Email;
        $customer->Address = $request->Address;
        $customer->save();

        return redirect()->route('CustomerList');
    }
}
