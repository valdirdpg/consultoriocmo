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
    private $totalpage = 5;

    public function __construct(Convenio $convenio)
    {
        $this->convenio = $convenio;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $title = "convenios";
        $convenio = $this->convenio->paginate($this->totalpage);
        $tela = 'Convênios';
        $rotaSearch = "convenios.search";
        $rotaCreate = "convenios.create";
        return view('Site.clinica.convenio.convenio',compact('convenio','title', 'tela','rotaSearch','rotaCreate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Convenio';
        $tela =  'Gerenciar Convênios - Novo:';
        $rotaCreate = "convenios.create";
        return view('Site.clinica.convenio.create-edit', compact('title', 'cabecalho', 'tela','rotaCreate'));
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
    public function show($id)
    {

        $convenio = $this->convenio->find($id);
        $title = "Convenio: $convenio->nm_convenio";
        return view('Site.clinica.convenio.show',compact('convenio','title'));
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

        $tela = "Gerenciar Convênio - {$convenio->nm_convenio}"  ;
        return view('Site.clinica.convenio.create-edit', compact('title',  'convenio', 'tela'));
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

        // Verifica se o convenio está ativado
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
    public function destroy($id)
    {
        //localiza o convenio a ser deletado
        $convenio = $this->convenio->find($id);
        //deleta convenio atribuindo valo a variável
        $delete = $convenio->delete();
        //redireciona a janela após deletar
        if ($delete):
            return redirect()->route('convenios.index');
        else:
            return redirect()->route('convenios.show',$id)->with(['errors'=>'Erro ao tentar deletar convenio']);
        endif;
    }

    public function search(Request $request) {
        //Pega os dados do formulário
        $rotaSearch = "convenios.search";
        $rotaCreate = "convenios.create";
        $dataForm = $request->except('_token');
        $keySearch = $dataForm['search'];

        // Título da página
        $title = "Convênios: {$keySearch}";

        // Faz o filtro dos dados
        $convenio = $this->convenio->where('nm_convenio', 'LIKE', "%$keySearch%")
            ->orWhere('ds_regioes', 'LIKE', "%$keySearch%")
            ->paginate($this->totalpage);

        return view('Site.clinica.convenio.convenio', compact('convenio', 'title', 'dataForm','keySearch','rotaSearch','rotaCreate'));

    }
}
