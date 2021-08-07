<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $pending_clients = Client::where('status','0')->orderBy('client_id', 'desc')->paginate(10, ['*'], 'pendingClient');        
        $approved_clients = Client::where('status','1')->orderBy('client_id', 'desc')->paginate(10, ['*'], 'approvedClient');
        $rejected_clients = Client::where('status','2')->orderBy('client_id', 'desc')->paginate(10, ['*'], 'rejectedClient');    
        return view('admin')->with([
            'pending_clients' => $pending_clients,    
            'approved_clients' => $approved_clients,    
            'rejected_clients' => $rejected_clients,    
        ]);
    }


    public function approve($id){
        $client = Client::findOrFail($id);
        $client->status = 1;
        $client->save();
        return redirect()->back();
    }

    public function decline($id){
        $client = Client::findOrFail($id);
        $client->status = 2;
        $client->save();
        return redirect()->back();
    }

}