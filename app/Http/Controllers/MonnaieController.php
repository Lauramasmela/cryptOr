<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monnaie;

class MonnaieController extends Controller
{
    public function index()
    {
        $monnaies = Monnaie::all()->sortByDesc('cours');
        return view('monnaies.index')->with('monnaies', $monnaies);
    }


    public function create()
    {
        return view('monnaies.create');
    }


    public function store(Request $request)
    {
        if ($request->hasFile('logo_monnaie') && !empty($request->input('nom_monnaie')) &&
            !empty($request->input('symbole_monnaie')) && !empty($request->input('description_monnaie')) &&
            !empty($request->input('cours_monnaie'))) {

            $sym =$request->input('symbole_monnaie');

            if (Monnaie::where('symbole', $sym )->exists()){
                session()->flash('error_msg', 'Cette monnaie existe déja!');
                return redirect()->route('page.index');
            }

            $monnaies = new Monnaie();

            /****************** Enregistrement du logo ******************/

            $file = $request->file('logo_monnaie');


            $extAutorisees = array('jpeg', 'gif', 'png', 'jpg');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;


            if (!in_array( $extension, $extAutorisees)) {
                session()->flash('error_msg', 'Les seules extensions autorisées sont : .jpeg, .gif, .png, .jpg');
                return redirect()->route('page.create');
            }

            $file->move(config('constants.paths.path_logos_monnaies'), $filename);

            $monnaies->logo = $filename;

            /****************** Enregistrement des autres inputs ******************/

            $monnaies->nom = ucwords($request->input('nom_monnaie'));
            $monnaies->symbole = strtoupper($request->input('symbole_monnaie'));
            $monnaies->description = ucfirst($request->input('description_monnaie'));
            $monnaies->cours = $request->input('cours_monnaie');

            if ($monnaies->save()) {
                session()->flash('success_msg',  'L\'enregistrement s\'est déroulé avec succès!');
                return redirect()->route('page.index');
            } else {
                session()->flash('error_msg','Un problème est survenu pendant l\'enregistrement');
                return redirect()->route('page.index');
            }

        } else {
            session()->flash('error_msg', 'Merci de remplir tout les champs !');
            return redirect()->route('page.create');
        }

    }
}
