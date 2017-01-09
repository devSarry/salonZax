<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $messages = Message::paginate(25);

        return view('admin.contact.index', compact('messages'));
    }

    public function show($id)
    {
        $message = Message::find($id);

        return view('admin.contact.show', compact('message'));
    }

    public function destroy($id)
    {
        Message::destroy($id);

        alert()->success('Successfully Deleted Message');

        return redirect(route('messages.index'));
    }
}
