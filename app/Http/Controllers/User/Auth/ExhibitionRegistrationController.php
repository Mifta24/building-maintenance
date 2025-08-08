<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ExhibitionRegistrationController extends Controller
{
    // Method untuk menampilkan view form
    public function show()
    {
        return view('user.auth.exhibition-registration');
    }

    // Method untuk mengirim email
    public function send(Request $request)
    {
        // 1. Validasi input form
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'companyName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|min:9|max:15',
            'country' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'exhibition' => 'required|string|max:255',
        ]);

        // 2. Kirim email
        // Email akan dikirim ke alamat yang Anda tentukan di sini
        $recipientEmail = "yonandaputra05@gmail.com";
        Mail::to($recipientEmail)->send(new ContactFormMail($validatedData));

        // 3. Redirect kembali dengan pesan sukses
        return redirect()->route('auth.exhibitionRegistration.show')->with('success', 'Your request has been sent successfully');
    }
}
