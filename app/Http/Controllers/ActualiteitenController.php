<?php

namespace App\Http\Controllers;

use App\File;

class ActualiteitenController extends Controller
{
  public function index()
  {
    // $filesO = File::all()->where('last_name', '=', 'Dagje Uit 2019 Groeningen')->sortBy('name');
    // $filesP = File::all()->where('last_name', '=', 'Muziek op de Maas 2019')->sortBy('name');
    // $filesQ = File::all()->where('last_name', '=', 'Optreden in Oploo')->sortBy('name');
    // $filesR = File::all()->where('last_name', '=', 'Liedjesaovend2019')->sortBy('name');
    // $filesS = File::all()->where('last_name', '=', 'Kerstconcert in Oploo')->sortBy('name');
    // $filesT = File::all()->where('last_name', '=', 'Z.E.V.-Interactief 2018')->sortBy('name');
    // $filesU = File::all()->where('last_name', '=', 'Uitstapje Z.E.V. naar Doesburg')->sortBy('name');
    // $filesV = File::all()->where('last_name', '=', 'Repetitie Z.E.V. in Asten')->sortBy('name');
    // $filesW = File::all()->where('last_name', '=', 'Muziek op de Maas 2018')->sortBy('name');
    // $filesX = File::all()->where('last_name', '=', 'Goei Leven Festival in Wanroij')->sortBy('name');
    // $filesY = File::all()->where('last_name', '=', 'Z.E.V.-Interactief 2017')->sortBy('name');
    // $filesZ = File::all()->where('last_name', '=', 'LA2018')->sortBy('name');
    // $files0 = File::all()->where('last_name', '=', 'Poster_2017_ZI')->sortBy('name');

    // return view('nieuw.actualiteiten', compact('filesO', 'filesP', 'filesQ', 'filesR', 'filesS', 'filesT', 'filesU', 'filesV', 'filesW', 'filesX', 'filesY', 'filesZ', 'files0'));
    return view('nieuw.actualiteiten');
  }

}
