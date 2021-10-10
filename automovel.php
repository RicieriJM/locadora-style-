<?php

namespace App\Controllers;

use App\Models\automovelModel;

class automovel extends BaseController
{
    public function index()
    {
        $automovelModel = new automovelModel();
 
        $todos = $automovelModel->findAll();
 
        foreach ($todos as $key => $linha) {
            $todos[$key]['delete'] = '<a href="automoveldelete/' . $linha['TB_AUTOMOVEL_ID'] . '"> DELETAR </a>' ;
            $todos[$key]['update'] = '<a href="automovelupdate/' . $linha['TB_AUTOMOVEL_ID'] . '"> ATUALIZAR </a>' ;
        }

        $data['tabela'] = $todos;
        echo view('automovelList', $data);
    }
 
    public function insert()
    {
        if(isset($this->request->getPost()['TB_AUTOMOVEL_ID'])) {
            $id = $this->request->getPost()['TB_AUTOMOVEL_ID'];
        } else {
            $id = FALSE;
        }

        $automovelModel = new automovelModel();

        $this->TB_AUTOMOVEL_NOME = $this->request->getPost()['TB_AUTOMOVEL_NOME'];
        $this->TB_AUTOMOVEL_ANO_FAB = $this->request->getPost()['TB_AUTOMOVEL_ANO_FAB'];
        $this->TB_AUTOMOVEL_COR = $this->request->getPost()['TB_AUTOMOVEL_COR'];
        $this->TB_AUTOMOVEL_KM = $this->request->getPost()['TB_AUTOMOVEL_KM'];
        $this->TB_AUTOMOVEL_VALOR_D = $this->request->getPost()['TB_AUTOMOVEL_VALOR_D'];
        $this->TB_AUTOMOVEL_STATUS = $this->request->getPost()['TB_AUTOMOVEL_STATUS'];
        $this->TB_MARCA_ID = $this->request->getPost()['TB_MARCA_ID'];
        $this->TB_MODELO_ID = $this->request->getPost()['TB_MODELO_ID'];

        $data = [
            'TB_AUTOMOVEL_NOME' => $this->TB_AUTOMOVEL_NOME,
            'TB_AUTOMOVEL_ANO_FAB' => $this->TB_AUTOMOVEL_ANO_FAB,
            'TB_AUTOMOVEL_COR' => $this->TB_AUTOMOVEL_COR,
            'TB_AUTOMOVEL_KM' => $this->TB_AUTOMOVEL_KM,
            'TB_AUTOMOVEL_VALOR_D' => $this->TB_AUTOMOVEL_VALOR_D,
            'TB_AUTOMOVEL_STATUS' => $this->TB_AUTOMOVEL_STATUS,
            'TB_MARCA_ID' => $this->TB_MARCA_ID,
            'TB_MODELO_ID' => $this->TB_MODELO_ID
            ];

        if($id != FALSE) {
            $data['TB_AUTOMOVEL_ID'] = $id;
        }

        $result = $automovelModel->save($data);

        var_dump($result);
    }

    public function update($id = FALSE)
    {
        if(isset($this->request->getPost()['TB_AUTOMOVEL_ID'])) {
            $id = $this->request->getPost()['TB_AUTOMOVEL_ID'];
        } else {
            $id = FALSE;
        }

        $automovelModel = new automovelModel();

        $this->TB_AUTOMOVEL_NOME = $this->request->getPost()['TB_AUTOMOVEL_NOME'];
        $this->TB_AUTOMOVEL_ANO_FAB = $this->request->getPost()['TB_AUTOMOVEL_ANO_FAB'];
        $this->TB_AUTOMOVEL_COR = $this->request->getPost()['TB_AUTOMOVEL_COR'];
        $this->TB_AUTOMOVEL_KM = $this->request->getPost()['TB_AUTOMOVEL_KM'];
        $this->TB_AUTOMOVEL_VALOR_D = $this->request->getPost()['TB_AUTOMOVEL_VALOR_D'];
        $this->TB_AUTOMOVEL_STATUS = $this->request->getPost()['TB_AUTOMOVEL_STATUS'];
        $this->TB_MARCA_ID = $this->request->getPost()['TB_MARCA_ID'];
        $this->TB_MODELO_ID = $this->request->getPost()['TB_MODELO_ID'];

        $data = [
            'TB_AUTOMOVEL_NOME' => $this->TB_AUTOMOVEL_NOME,
            'TB_AUTOMOVEL_ANO_FAB' => $this->TB_AUTOMOVEL_ANO_FAB,
            'TB_AUTOMOVEL_COR' => $this->TB_AUTOMOVEL_COR,
            'TB_AUTOMOVEL_KM' => $this->TB_AUTOMOVEL_KM,
            'TB_AUTOMOVEL_VALOR_D' => $this->TB_AUTOMOVEL_VALOR_D,
            'TB_AUTOMOVEL_STATUS' => $this->TB_AUTOMOVEL_STATUS,
            'TB_MARCA_ID' => $this->TB_MARCA_ID,
            'TB_MODELO_ID' => $this->TB_MODELO_ID
            ];

        if($id != FALSE) {
            $data['TB_AUTOMOVEL_ID'] = $id;
        }

        $result = $automovelModel->save($data);

        var_dump($result);
    }

    public function automoveldelete($id = FALSE)
    {
        $automovelModel = new automovelModel();
		
		$automovelModel->delete($id);
		
		return redirect()->back();
    }

    public function automovelinsert()
    {
        echo view('automovelInsert');
    }

    public function automovelupdate($id = null)
    {
        $automovelModel = new automovelModel();

        $select = $automovelModel->find($id);

        $data['edit'] = $select;
        echo view('automovelUpdate', $data);
    }
}
