<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
   public function create()
{
    $messages = User::all();
    return view('chat.index')->with('users', $messages);
}


    public function index()
    {
        // Ambil semua pesan chat yang terkait dengan pengguna saat ini
        $messages = Chat::where('sender_id', Auth::id())
                           ->orWhere('receiver_id', Auth::id())
                           ->orderBy('created_at')
                           ->get();

        return view('chat.index', compact('messages'));
    }

    public function sendMessage(Request $request)
    {
        // Validasi data yang dikirim melalui form
        $request->validate([
            'receiver_id' => 'required',
            'message' => 'required',
        ]);

        // Simpan pesan ke database
        Chat::create([
            'sender_id' => Auth::id(),
           // 'receiver_id' => Auth::id(),
            'receiver_id' => $request->input('receiver_id'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim.');
    }
}
