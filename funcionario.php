<?php

namespace App\Controllers;

use App\Models\funcionarioModel;

class funcionario extends BaseController
{
    public function index()
    {
        $funcionarioModel = new funcionarioModel();
 
        $todos = $funcionarioModel->findAll();
 
        foreach ($todos as $key => $linha) {
            $todos[$key]['delete'] = '<a href="funcionariodelete/' . $linha['TB_FUNCIONARIO_ID'] . '"> DELETAR </a>' ;
            $todos[$key]['update'] = '<a href="funcionarioupdate/' . $linha['TB_FUNCIONARIO_ID'] . '"> ATUALIZAR </a>' ;
        }

        $data['tabela'] = $todos;
        echo view('funcionarioList', $data);
    }
 
    public function insert()
    {
        if(isset($this->request->getPost()['TB_FUNCIONARIO_ID'])) {
            $id = $this->request->getPost()['TB_FUNCIONARIO_ID'];
        } else {
            $id = FALSE;
        }

        $funcionarioModel = new funcionarioModel();

        $this->TB_FUNCIONARIO_NOME = $this->request->getPost()['TB_FUNCIONARIO_NOME'];
        $this->TB_FUNCIONARIO_TEL = $this->request->getPost()['TB_FUNCIONARIO_TEL'];
        $this->TB_FUNCIONARIO_DT_CONTRATO = $this->request->getPost()['TB_FUNCIONARIO_DT_CONTRATO'];

        $data = [
            'TB_FUNCIONARIO_NOME' => $this->TB_FUNCIONARIO_NOME,
            'TB_FUNCIONARIO_TEL' => $this->TB_FUNCIONARIO_TEL,
            'TB_FUNCIONARIO_DT_CONTRATO' => $this->TB_FUNCIONARIO_DT_CONTRATO,
            ];

        if($id != FALSE) {
            $data['TB_FUNCIONARIO_ID'] = $id;
        }

        $result = $funcionarioModel->save($data);

        var_dump($result);
    }

    public function update($id = FALSE)
    {
        if(isset($this->request->getPost()['TB_FUNCIONARIO_ID'])) {
            $id = $this->request->getPost()['TB_FUNCIONARIO_ID'];
        } else {
            $id = FALSE;
        }

        $funcionarioModel = new funcionarioModel();

        $this->TB_FUNCIONARIO_NOME = $this->request->getPost()['TB_FUNCIONARIO_NOME'];
        $this->TB_FUNCIONARIO_TEL = $this->request->getPost()['TB_FUNCIONARIO_TEL'];
        $this->TB_FUNCIONARIO_DT_CONTRATO = $this->request->getPost()['TB_FUNCIONARIO_DT_CONTRATO'];

        $data = [
            'TB_FUNCIONARIO_NOME' => $this->TB_FUNCIONARIO_NOME,
            'TB_FUNCIONARIO_TEL' => $this->TB_FUNCIONARIO_TEL,
            'TB_FUNCIONARIO_DT_CONTRATO' => $this->TB_FUNCIONARIO_DT_CONTRATO,
            ];

        if($id != FALSE) {
            $data['TB_FUNCIONARIO_ID'] = $id;
        }

        $result = $funcionarioModel->save($data);

        var_dump($result);
    }

    public function funcionariodelete($id = FALSE)
    {
        $funcionarioModel = new funcionarioModel();
		
		$funcionarioModel->delete($id);
		
		return redirect()->back();
    }

    public function funcionarioinsert()
    {
        echo view('funcionarioInsert');
    }

    public function funcionarioupdate($id = null)
    {
        $funcionarioModel = new funcionarioModel();

        $select = $funcionarioModel->find($id);

        $data['edit'] = $select;
        echo view('funcionarioUpdate', $data);
    }
}
