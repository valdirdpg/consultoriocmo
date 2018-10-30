<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\Request\ConvenioFormRequest;
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
        $title = "CadastrarConvenio";
        return view('Site.clinica.convenio.CadastrarConvenio', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConvenioFormRequest $request)
    {
        //$convenio = $request->except('_token');
        $convenio = $request->all();
        //dd($convenio);

        $convenio['ativo'] = (!isset($convenio['ativo']))? 0:1;
        //return
        $inserir = $this->convenio->create($convenio);
        if($inserir):
            return redirect()->route('convenios.index');
        else:
            return redirect()->route('convenios.create');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function show(Convenio $convenio)
    {
        return 'Teste ' . $convenio->id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenio = $this->convenio->find($id);

        $title = "Editar Convênio: {$convenio->nm_convenio}";


        return view('Site.clinica.convenio.create', compact('title',  'convenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function update(ConvenioFormRequest $request,$id)
    {
        $dataForm = $request->all();

        // Recupera o item para editar
        $convenio = $this->convenio->find($id);

        // Verifica se o produto está ativado
        $dataForm['ativo'] = (! isset($dataForm['ativo'])) ? 0 : 1;

        // Altera os itens
        $update = $convenio->update($dataForm);

        // Verifica se realmente editou
        if ($update)
            return redirect()->route('convenios.index');
        else
            //with é utilizado para passsar uma mensagem dentro de um array
            return redirect()->route('convenios.edit', $convenio->id)->with([
                'errors' => 'Falha ao editar'
            ]);
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

    public function search(Request $request) {
        //Pega os dados do formulário

        $dataForm = $request->except('_token');
        $keySearch = $dataForm['search'];

        // Título da página
        $title = "Resultados para produto: {$keySearch}";

        // Faz o filtro dos dados
        $convenios = $this->convenio->where('name', 'LIKE', "%$keySearch%")
            ->orWhere('description', 'LIKE', "%$keySearch%")
            ->paginate($this->totalPage);

        return view('Site.clinica.convenio.index', compact('convenios', 'title', 'dataForm'));

    }
}
