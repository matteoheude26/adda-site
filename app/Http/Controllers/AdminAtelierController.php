<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminAtelierController extends Controller
{
    public function index(): View{
        return view('administration.atelier.index',[
            'ateliers' => Atelier::all()
        ]);
    }

    public function create(): View{
        return view('administration.atelier.create');
    }

    public function store(Request $request){
        // Validation des données
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'details' => 'required|string',
            'jour' => 'required|string|in:lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche',
            'horaire' => 'required|date_format:H:i',
            'duree' => 'required|numeric|min:0.5|max:8',
            'picto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $atelier = Atelier::create([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'details' => $request->input('details'),
            'jour' => $request->input('jour'),
            'horaire' => $request->input('horaire'),
            'duree' => $request->input('duree'),
            'picto' => $request->file('picto')->store('\images','public'),
        ]);
        
        return redirect(route('administration.atelier.index'))
            ->with('success','Nouvel atelier sauvegardé');
    }

    public function edit(Atelier $atelier): View{
        return view('administration.atelier.edit',[
            'atelier' => $atelier
        ]);
    }

    public function update(Request $request, Atelier $atelier){
        // Validation des données
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'details' => 'required|string',
            'jour' => 'required|string|in:lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche',
            'horaire' => 'required|date_format:H:i',
            'duree' => 'required|numeric|min:0.5|max:8',
            'picto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $atelier->update([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'details' => $request->input('details'),
            'jour' => $request->input('jour'),
            'horaire' => $request->input('horaire'),
            'duree' => $request->input('duree'),
            'picto' => $request->file('picto')->store('\images','public'),
        ]);
        
        if (!$request->file('picto') == null){
            Storage::disk('public')->delete($atelier->picto);
            $atelier->update([
                'picto' => $request->file('picto')->store('\images','public'),
            ]);
        }
        
        return redirect(route('administration.atelier.index'))
            ->with('success','Atelier modifié');
    }

    public function destroy(Request $request, Atelier $atelier){
        Storage::disk('public')->delete($atelier->picto);
        $atelier->delete();
        return redirect(route('administration.atelier.index'))
            ->with('success','Atelier supprimé');
    }
}