<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
   public function index()
    {
        $projets = Projet::all();
      return view ('projets.index')->with('projets', $projets);
    }

    
    public function create()
    {
        return view('projets.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Projet::create($input);
        return redirect('projet')->with('flash_message', 'Projet Addedd!');  
    }

    
    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projets.show')->with('projets', $projet);
    }

    
    public function edit($id)
    {
        //$contact = Contact::find($id);
        //return view('contacts.edit')->with('contacts', $contact);
    }

  
    public function update(Request $request, $id)
    {
        //$contact = Contact::find($id);
        //$input = $request->all();
        //$contact->update($input);
        //return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }

   
    public function destroy($id)
    {
        //Contact::destroy($id);
        //return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }
}
