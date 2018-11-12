<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\Request\EspecialidadeFormRequest;
use App\Model\Especialidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $especialidade;
    private $totalpage = 5;

    public function __construct(Especialidade $especialidade)
    {
        $this->especialidade = $especialidade;
    }
    public function index()
    {
        $especialidade = $this->especialidade->paginate($this->totalpage);
        $title = "Especialidades";
        $tela = 'Especialidade';
        $rotaSearch = "especialidades.search";
        $rotaCreate = "especialidades.create";
        return view('Site.clinica.especialidade.especialidade', compact('title','tela','rotaSearch','rotaCreate','especialidade'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Especialidades';
        $tela =  'Gerenciar Especialidades - Novo:';
        $rotaCreate = "especialidades.create";
        return view('Site.clinica.especialidade.create-edit', compact('title', 'cabecalho', 'tela','rotaCreate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EspecialidadeFormRequest $request)
    {
        $formulario = $request->all();

        $formulario['ativo'] = (!isset($formulario['ativo'])) ? 0 : 1;

        $inserir = $this->especialidade->create($formulario);

        if ($inserir)
            return redirect()->route('especialidades.index');
        else
            return redirect()->route('especialidades.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function show(Especialidade $especialidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidade= $this->especialidade->find($id);
        $tela = "Gerenciar Especialidades - {$especialidade->ds_especialidades}";
        $title = "Especialidades";
        return view('Site.clinica.especialidade.create-edit',compact('title','especialidade','tela'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function update(EspecialidadeFormRequest $request, $id)
    {
        $dataForm = $request->all();

        $formulario = $this->especialidade->find($id);

        $dataForm['ativo'] = (!isset($dataForm['ativo'])) ? 0 : 1;

        $update = $formulario->update($dataForm);

        if ($update)
            return redirect()->route('especialidades.index');
        else
            return redirect()->route('especialidades.edit',$formulario->id)->with(['errors'=>'Erro ao tetar alterar especialidade!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialidade $especialidade)
    {
        //
    }
}
