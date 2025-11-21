<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        if (!Auth::user() || Auth::user()->role !== 'admin') {
            abort(403);
        }

        $contacts = Contact::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        if (!Auth::user() || Auth::user()->role !== 'admin') {
            abort(403);
        }

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        if (!Auth::user() || Auth::user()->role !== 'admin') {
            abort(403);
        }

        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Message deleted.');
    }
}
