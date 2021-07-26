<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Specialization;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


//QUESTO CONTROLLER GESTISCE TUTTI I DATI DEL DOTTORE
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $specializations = Specialization::all();
        return view('admin.profiles.index', compact('user', 'specializations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            // $user = Auth::user();
            // $specializations = Specialization::all();
            // return view('admin.profiles.index', compact('user', 'specializations'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        // aggiunto gab
        $data = $request->all();
        // $new_specialization = new User();
        // $new_specialization->fill($data);
        // $new_specialization->save();

        //  if (array_key_exists('specializations', $data)) {
        //     $new_specialization->specializaions()->attach($data['specializations']);
        // }
        // return redirect()->route('admin.posts.show', $new_specialization);

        // aggiunto per foto
        if(array_key_exists('cover',$data)){
            // prendo in nome del file caricato e lo salvo dentro data come elemento fillabile
            $data['cover_original_name'] = $request->file('propic')->getClientOriginalName();
            // salvo il file in storage e salvo il path
            $image_path = Storage::put('uploads',$data['propic']);
            // inserisco il path deltro il data fillabile
            $data['propic'] = $image_path;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc_edit = User::find($id);

        $docspec = $doc_edit->specializations;

        $specializations = Specialization::all();

        return view('admin.profiles.edit', compact('doc_edit', 'specializations', 'docspec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorRequest $request, $id)
    {
        $doc_update = User::find($id);
        $data = $request->all();
        /* dd($data); */

        //aggiunto da gab foto
        if(array_key_exists('propic',$data)){
            // se esiste un'immagine da sostituire elimino quella vecchia
            if($doc_update->propic){
                Storage::delete($doc_update->propic);
            }
            // prendo in nome del file caricato e lo salvo dentro data come elemento fillabile
            // $data['cover_original_name'] = $request->file('propic')->getClientOriginalName();
            // salvo il file in storage e salvo il path
            $image_path = Storage::put('uploads',$data['propic']);
            // inserisco il path deltro il data fillabile
            $data['propic'] = $image_path;
        }
        //aggiunto da gab foto


        $doc_update->update($data);
        $doc_update->specializations()->sync($request['specialization']); //$request non $data !


        return redirect()->route('admin.profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->route('admin.home');
    }
}


        // Retrieve the currently authenticated user...
        /* $user = Auth::user(); */

        // Retrieve the currently authenticated user's ID...
        /* $id = Auth::id(); */


