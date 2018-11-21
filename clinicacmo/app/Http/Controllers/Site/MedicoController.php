<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\Request\FormMedicosRequest;
use App\Model\Medico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\This;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $medico;
    public $totalpage = 5;

    public function __construct(Medico $medico)
    {
        $this->medico = $medico;
    }
    public function index()
    {
        $medico = $this->medico->paginate($this->totalpage);
        $title = "Medicos";
        $tela = "Lista de Médicos";
        $rotaSearch = 'medicos.search';
        $rotaCreate = "medicos.create";
        return view('Site.clinica.medico.medico',compact('title', 'tela','rotaCreate','medico','rotaSearch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $title = "Cadastro Médico";
        $tela = "Gerenciar Médico - Novo:";
        $rotaCreate = 'medicos.create';
        return view('Site.clinica.medico.create-edit', compact('title','tela','rotaCreate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormMedicosRequest $request)
    {
        $formulario = $request->all();
        $formulario['ativo'] = (isset($formulario['ativo']))? 1 : 0;
        $inserir = $this->medico->create($formulario);
        if($inserir):
            return redirect()->route('medicos.index');
        else:
            return redirect()->route('medicos.store')->with([
                'errors'=>'Ocorreu um problema ao tentar inserir dados. tente novamente!'
            ]);
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = $this->medico->find($id);
        $title = "Médico: {$medico->nm_medico}";
        return view('Site.clinica.medico.show',compact('medico','title'));
    }

    public function edit($id)
    {
        $medico = $this->medico->find($id);
        $title = "Editar Cadastro";
        $tela = "Gerenciar Medico: {$medico->nm_medico}";
        return view('Site.clinica.medico.create-edit',compact('medico','title','tela'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(FormMedicosRequest $request, $id)
    {
        $dataForm = $request->all();
        $dataForm['ativo'] = (isset($dataForm['ativo'])) ? 1:0;
        $formulario = $this->medico->find($id);
        $update = $formulario->update($dataForm);
        if ($update):
            return redirect()->route('medicos.index');
        else:
            return redirect()->route('medicos.update',$formulario->id);
        endif;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = $this->medico->find($id);

        $delete = $medico->delete();

        if ($delete):
            return redirect()->route('medicos.index');
        else:
            return redirect()->route('medicos.show',$id)->with(['errors'=>'Ocorreu um erro na tentativa de deletar registro.']);
        endif;

    }
}
