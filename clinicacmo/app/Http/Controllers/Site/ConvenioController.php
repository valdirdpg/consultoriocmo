<?php

namespace App\Http\Controllers\Site;

use App\Model\Convenio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $convenio;
    public function __construct(Convenio $convenio)
    {
       $this->convenio = $convenio;
    }

    public function index()
    {
        $title = "Convenios";
        $convenio = $this->convenio->all();
        return view('Site.clinica.convenio.convenio',compact('convenio','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'CadastrarConvenio';
        return view('Site.clinica.convenio.CadastrarConvenio', compact('title'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function show(Convenio $convenio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function edit(Convenio $convenio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convenio $convenio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convenio $convenio)
    {
        //
    }
}
