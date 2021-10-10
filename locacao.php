<?php

namespace App\Controllers;

use App\Models\locacaoModel;

class locacao extends BaseController
{
    public function index()
    {
        $locacaoModel = new locacaoModel();
 
        $todos = $locacaoModel->findAll();
 
        foreach ($todos as $key => $linha) {
            $todos[$key]['delete'] = '<a href="locacaodelete/' . $linha['TB_LOCACAO_ID'] . '"> DELETAR </a>' ;
            $todos[$key]['update'] = '<a href="locacaoupdate/' . $linha['TB_LOCACAO_ID'] . '"> ATUALIZAR </a>' ;
        }

        $data['tabela'] = $todos;
        echo view('locacaoList', $data);
    }
 
    public function insert()
    {
        if(isset($this->request->getPost()['TB_LOCACAO_ID'])) {
            $id = $this->request->getPost()['TB_LOCACAO_ID'];
        } else {
            $id = FALSE;
        }

        $locacaoModel = new locacaoModel();

        $this->TB_LOCACAO_TIPO = $this->request->getPost()['TB_LOCACAO_TIPO'];
        $this->TB_LOCACAO_VALOR = $this->request->getPost()['TB_LOCACAO_VALOR'];
        $this->TB_LOCACAO_DT_INICIO = $this->request->getPost()['TB_LOCACAO_DT_INICIO'];
        $this->TB_LOCACAO_DT_FIM = $this->request->getPost()['TB_LOCACAO_DT_FIM'];

        $data = [
            'TB_LOCACAO_TIPO' => $this->TB_LOCACAO_TIPO,
            'TB_LOCACAO_VALOR' => $this->TB_LOCACAO_VALOR,
            'TB_LOCACAO_DT_INICIO' => $this->TB_LOCACAO_DT_INICIO,
            'TB_LOCACAO_DT_FIM' => $this->TB_LOCACAO_DT_INICIO,
            ];

        if($id != FALSE) {
            $data['TB_LOCACAO_ID'] = $id;
        }

        $result = $locacaoModel->save($data);

        var_dump($result);
    }

    public function update($id = FALSE)
    {
        if(isset($this->request->getPost()['TB_LOCACAO_ID'])) {
            $id = $this->request->getPost()['TB_LOCACAO_ID'];
        } else {
            $id = FALSE;
        }

        $locacaoModel = new locacaoModel();

        $this->TB_LOCACAO_TIPO = $this->request->getPost()['TB_LOCACAO_TIPO'];
        $this->TB_LOCACAO_VALOR = $this->request->getPost()['TB_LOCACAO_VALOR'];
        $this->TB_LOCACAO_DT_INICIO = $this->request->getPost()['TB_LOCACAO_DT_INICIO'];
        $this->TB_LOCACAO_DT_FIM = $this->request->getPost()['TB_LOCACAO_DT_FIM'];

        $data = [
            'TB_LOCACAO_TIPO' => $this->TB_LOCACAO_TIPO,
            'TB_LOCACAO_VALOR' => $this->TB_LOCACAO_VALOR,
            'TB_LOCACAO_DT_INICIO' => $this->TB_LOCACAO_DT_INICIO,
            'TB_LOCACAO_DT_FIM' => $this->TB_LOCACAO_DT_FIM,
            ];

        if($id != FALSE) {
            $data['TB_LOCACAO_ID'] = $id;
        }

        $result = $locacaoModel->save($data);

        var_dump($result);
    }

    public function locacaodelete($id = FALSE)
    {
        $locacaoModel = new locacaoModel();
		
		$locacaoModel->delete($id);
		
		return redirect()->back();
    }

    public function locacaoinsert()
    {
        echo view('locacaoInsert');
    }

    public function locacaoupdate($id = null)
    {
        $locacaoModel = new locacaoModel();

        $select = $locacaoModel->find($id);

        $data['edit'] = $select;
        echo view('locacaoUpdate', $data);
    }
}
