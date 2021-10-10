<?php

namespace App\Controllers;

use App\Models\marcaModel;

class marca extends BaseController
{
    public function index()
    {
        $marcaModel = new marcaModel();
 
        $todos = $marcaModel->findAll();
 
        foreach ($todos as $key => $linha) {
            $todos[$key]['delete'] = '<a href="marcadelete/' . $linha['TB_MARCA_ID'] . '"> DELETAR </a>' ;
            $todos[$key]['update'] = '<a href="marcaupdate/' . $linha['TB_MARCA_ID'] . '"> ATUALIZAR </a>' ;
        }

        $data['tabela'] = $todos;
        echo view('marcaList', $data);
    }
 
    public function insert()
    {
        if(isset($this->request->getPost()['TB_MARCA_ID'])) {
            $id = $this->request->getPost()['TB_MARCA_ID'];
        } else {
            $id = FALSE;
        }

        $marcaModel = new marcaModel();

        $this->TB_MARCA_NOME = $this->request->getPost()['TB_MARCA_NOME'];

        $data = [
            'TB_MARCA_NOME' => $this->TB_MARCA_NOME,
            ];

        if($id != FALSE) {
            $data['TB_MARCA_ID'] = $id;
        }

        $result = $marcaModel->save($data);

        var_dump($result);
    }

    public function update($id = FALSE)
    {
        if(isset($this->request->getPost()['TB_MARCA_ID'])) {
            $id = $this->request->getPost()['TB_MARCA_ID'];
        } else {
            $id = FALSE;
        }

        $marcaModel = new marcaModel();

        $this->TB_MARCA_NOME = $this->request->getPost()['TB_MARCA_NOME'];

        $data = [
            'TB_MARCA_NOME' => $this->TB_MARCA_NOME,
            ];

        if($id != FALSE) {
            $data['TB_MARCA_ID'] = $id;
        }

        $result = $marcaModel->save($data);

        var_dump($result);
    }

    public function marcadelete($id = FALSE)
    {
        $marcaModel = new marcaModel();
		
		$marcaModel->delete($id);
		
		return redirect()->back();
    }

    public function marcainsert()
    {
        echo view('marcaInsert');
    }

    public function marcaupdate($id = null)
    {
        $marcaModel = new marcaModel();

        $select = $marcaModel->find($id);

        $data['edit'] = $select;
        echo view('marcaUpdate', $data);
    }
}
