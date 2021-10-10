<?php

namespace App\Controllers;

use App\Models\clienteModel;

class cliente extends BaseController
{
    public function index()
    {
        $clienteModel = new clienteModel();
 
        $todos = $clienteModel->findAll();
 
        foreach ($todos as $key => $linha) {
            $todos[$key]['delete'] = '<a href="clientedelete/' . $linha['TB_CLIENTE_ID'] . '"> DELETAR </a>' ;
            $todos[$key]['update'] = '<a href="clienteupdate/' . $linha['TB_CLIENTE_ID'] . '"> ATUALIZAR </a>' ;
        }

        $data['tabela'] = $todos;
        echo view('clienteList', $data);
    }
 
    public function insert()
    {
        if(isset($this->request->getPost()['TB_CLIENTE_ID'])) {
            $id = $this->request->getPost()['TB_CLIENTE_ID'];
        } else {
            $id = FALSE;
        }

        $clienteModel = new clienteModel();

        $this->TB_CLIENTE_NOME = $this->request->getPost()['TB_CLIENTE_NOME'];
        $this->TB_CLIENTE_TEL = $this->request->getPost()['TB_CLIENTE_TEL'];
        $this->TB_CLIENTE_SEXO = $this->request->getPost()['TB_CLIENTE_SEXO'];
        $this->TB_CLIENTE_EMAIL = $this->request->getPost()['TB_CLIENTE_EMAIL'];
        $this->TB_CLIENTE_SENHA = $this->request->getPost()['TB_CLIENTE_SENHA'];
        $this->TB_CLIENTE_ENDERECO = $this->request->getPost()['TB_CLIENTE_ENDERECO'];
        $this->TB_CLIENTE_COMPLEMENTO = $this->request->getPost()['TB_CLIENTE_COMPLEMENTO'];
        $this->TB_CLIENTE_BAIRRO = $this->request->getPost()['TB_CLIENTE_BAIRRO'];
        $this->TB_CLIENTE_CIDADE = $this->request->getPost()['TB_CLIENTE_CIDADE'];
        $this->TB_CLIENTE_UF = $this->request->getPost()['TB_CLIENTE_UF'];
        $this->TB_CLIENTE_DT_NASC = $this->request->getPost()['TB_CLIENTE_DT_NASC'];
        $this->TB_CLIENTE_DT_CAD = $this->request->getPost()['TB_CLIENTE_DT_CAD'];

        $data = [
            'TB_CLIENTE_NOME' => $this->TB_CLIENTE_NOME,
            'TB_CLIENTE_TEL' => $this->TB_CLIENTE_TEL,
            'TB_CLIENTE_SEXO' => $this->TB_CLIENTE_SEXO,
            'TB_CLIENTE_EMAIL' => $this->TB_CLIENTE_EMAIL,
            'TB_CLIENTE_SENHA' => $this->TB_CLIENTE_SENHA,
            'TB_CLIENTE_ENDERECO' => $this->TB_CLIENTE_ENDERECO,
            'TB_CLIENTE_BAIRRO' => $this->TB_CLIENTE_BAIRRO,
            'TB_CLIENTE_COMPLEMENTO' => $this->TB_CLIENTE_COMPLEMENTO,
            'TB_CLIENTE_CIDADE' => $this->TB_CLIENTE_CIDADE,
            'TB_CLIENTE_UF' => $this->TB_CLIENTE_UF,
            'TB_CLIENTE_DT_NASC' => $this->TB_CLIENTE_DT_NASC,
            'TB_CLIENTE_DT_CAD' => $this->TB_CLIENTE_DT_CAD
            ];

        if($id != FALSE) {
            $data['TB_CLIENTE_ID'] = $id;
        }

        $result = $clienteModel->save($data);

        var_dump($result);
    }

    public function update($id = FALSE)
    {
        if(isset($this->request->getPost()['TB_CLIENTE_ID'])) {
            $id = $this->request->getPost()['TB_CLIENTE_ID'];
        } else {
            $id = FALSE;
        }

        $clienteModel = new clienteModel();

        $this->TB_CLIENTE_NOME = $this->request->getPost()['TB_CLIENTE_NOME'];
        $this->TB_CLIENTE_TEL = $this->request->getPost()['TB_CLIENTE_TEL'];
        $this->TB_CLIENTE_SEXO = $this->request->getPost()['TB_CLIENTE_SEXO'];
        $this->TB_CLIENTE_EMAIL = $this->request->getPost()['TB_CLIENTE_EMAIL'];
        $this->TB_CLIENTE_SENHA = $this->request->getPost()['TB_CLIENTE_SENHA'];
        $this->TB_CLIENTE_ENDERECO = $this->request->getPost()['TB_CLIENTE_ENDERECO'];
        $this->TB_CLIENTE_COMPLEMENTO = $this->request->getPost()['TB_CLIENTE_COMPLEMENTO'];
        $this->TB_CLIENTE_BAIRRO = $this->request->getPost()['TB_CLIENTE_BAIRRO'];
        $this->TB_CLIENTE_CIDADE = $this->request->getPost()['TB_CLIENTE_CIDADE'];
        $this->TB_CLIENTE_UF = $this->request->getPost()['TB_CLIENTE_UF'];
        $this->TB_CLIENTE_DT_NASC = $this->request->getPost()['TB_CLIENTE_DT_NASC'];
        $this->TB_CLIENTE_DT_CAD = $this->request->getPost()['TB_CLIENTE_DT_CAD'];

        $data = [
            'TB_CLIENTE_NOME' => $this->TB_CLIENTE_NOME,
            'TB_CLIENTE_TEL' => $this->TB_CLIENTE_TEL,
            'TB_CLIENTE_SEXO' => $this->TB_CLIENTE_SEXO,
            'TB_CLIENTE_EMAIL' => $this->TB_CLIENTE_EMAIL,
            'TB_CLIENTE_SENHA' => $this->TB_CLIENTE_SENHA,
            'TB_CLIENTE_ENDERECO' => $this->TB_CLIENTE_ENDERECO,
            'TB_CLIENTE_BAIRRO' => $this->TB_CLIENTE_BAIRRO,
            'TB_CLIENTE_COMPLEMENTO' => $this->TB_CLIENTE_COMPLEMENTO,
            'TB_CLIENTE_CIDADE' => $this->TB_CLIENTE_CIDADE,
            'TB_CLIENTE_UF' => $this->TB_CLIENTE_UF,
            'TB_CLIENTE_DT_NASC' => $this->TB_CLIENTE_DT_NASC,
            'TB_CLIENTE_DT_CAD' => $this->TB_CLIENTE_DT_CAD
            ];

        if($id != FALSE) {
            $data['TB_CLIENTE_ID'] = $id;
        }

        $result = $clienteModel->save($data);

        var_dump($result);

        var_dump($result);
    }

    public function clientedelete($id = FALSE)
    {
        $clienteModel = new clienteModel();
		
		$clienteModel->delete($id);
		
		return redirect()->back();
    }

    public function clienteinsert()
    {
        echo view('clienteInsert');
    }

    public function clienteupdate($id = null)
    {
        $clienteModel = new clienteModel();

        $select = $clienteModel->find($id);

        $data['edit'] = $select;
        echo view('clienteUpdate', $data);
    }
}
