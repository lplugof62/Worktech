<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Blog::where('user_id', auth()->user()->id)->paginate(9);
        $registros['vacancies']=Vacancy::where('recruiter_id', auth()->user()->id )->latest()->get();
        return view('vacancy.index', $registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosVacancy=request()->except('_token');
        Vacancy::insert($datosVacancy);
        // return response()->json($datosVacancy);
        return redirect('vacancy')->with('msn', 'Vacante registrada exitosamente');
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
        //
        $vacancy=Vacancy::findOrFail($id);
        return view('vacancy.edit', compact('vacancy'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosVacancy=request()->except('_token','_method');
        Vacancy::where('id','=',$id)->update($datosVacancy);
        return redirect('vacancy')->with('msn', 'Vacante actualizada exitosamente');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Vacancy::destroy($id);
        return redirect('vacancy')->with('msn', 'Vacante eliminada exitosamente');;
    }
}
