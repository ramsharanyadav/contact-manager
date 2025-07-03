<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $contacts = Contact::latest()->paginate(10);

       return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        try {
            Contact::create([
                Contact::Name => $request->input('name'),
                Contact::Phone => $request->input('phone')
            ]);
    
            return redirect()->route('contacts.index')->with('success', 'Contact created!');

        } catch (\Throwable $th) {
            \Log::error('Contact create failed', ['error' => $th->getMessage()]);
            throw new \Exception("Failed to create contacts", 0, $th);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        try {
            $contact->update([
                Contact::Name => $request->input('name'),
                Contact::Phone => $request->input('phone')
            ]);

            return redirect()->route('contacts.index')->with('success', 'Contact updated!');

        } catch (\Throwable $th) {
            \Log::error('Contact update failed', ['error' => $th->getMessage()]);
            throw new \Exception("Failed to update contacts", 0, $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        try{
            $contact->delete();
            return redirect()->route('contacts.index')->with('success', 'Contact deleted!');
            
        } catch (\Throwable $th) {
            \Log::error('Contact delete failed', ['error' => $th->getMessage()]);
            throw new \Exception("Failed to delete contacts", 0, $th);
        }
    }

    public function importForm()
    {
        return view('contacts.import');
    }

    public function importXml(Request $request)
    {
        $request->validate([
            'xml_file' => 'required|file|mimetypes:text/xml,application/xml,text/plain'
        ]);

        try{
            $xmlFile = simplexml_load_file($request->file('xml_file'));
           
            if(!empty($xmlFile)) {
                foreach($xmlFile->contact as $entry) {
                    Contact::create([
                        Contact::Name => $entry->name,
                        Contact::Phone => $entry->phone
                    ]);
                }

                return redirect()->route('contacts.index')->with('success', 'Contacts imported successfully!');
            }
            
        } catch (\Throwable $th) {
            \Log::error('Contact import failed', ['error' => $th->getMessage()]);
            throw new \Exception("Failed to import contacts", 0, $th);
        }
    }
}
