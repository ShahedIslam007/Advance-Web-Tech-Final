<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConversationRequest;
use App\Http\Requests\UpdateConversationRequest;

class ConversationController extends Controller
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
     * @param  \App\Http\Requests\StoreConversationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConversationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function show(Conversation $conversation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function edit(Conversation $conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConversationRequest  $request
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConversationRequest $request, Conversation $conversation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conversation $conversation)
    {
        //
    }

    public function VendorMessages(Request $request)
    {
        $vendor = Vendor::where('Name', $request->Name)->first();

        return view('pages.Message.VendorMessage')->with('vendor', $vendor);
    }

    public function VendorMessagesSubmitted(Request $request)
    {

            $vendor = new Conversation();
            $vendor->SenderName = $request->SenderName;
            $vendor->Name = $request->Name;
            $vendor->Conversation = $request->Conversation;
            $vendor->save();

            return \view('pages.Admin.AdminDashboard');
    }

    public function VendorMessage()
    {
        $vendors = Conversation:: all();

        return \view('pages.Message.VendorMessageBox')->with('vendors',$vendors);
    }

    public function VendorReply(Request $request)
    {
        $vendor = Conversation::where('Name', $request->Name)->first();

        return view('pages.Message.VendorReply')->with('vendor', $vendor);
    }

    public function VendorReplySubmitted(Request $request)
    {

            $vendor = new Conversation();
            $vendor->SenderName = $request->SenderName;
            $vendor->Name = $request->Name;
            $vendor->Conversation = $request->Conversation;
            $vendor->save();

            return \view('pages.Admin.AdminDashboard');
    }

    public function AdminMessage()
    {
        $vendors = Conversation:: all();

        return \view('pages.Message.AdminMessageBox')->with('vendors',$vendors);
    }

    public function AdminReply(Request $request)
    {
        $vendor = Conversation::where('SenderName', $request->SenderName)->first();

        return view('pages.Message.AdminReply')->with('vendor', $vendor);
    }

    public function AdminReplySubmitted(Request $request)
    {

            $vendor = new Conversation();
            $vendor->SenderName = $request->SenderName;
            $vendor->Name = $request->Name;
            $vendor->Conversation = $request->Conversation;
            $vendor->save();

            return \view('pages.Admin.AdminDashboard');
    }
}
