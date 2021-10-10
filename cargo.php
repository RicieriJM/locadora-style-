<?php

namespace App\Controllers;

use App\Models\cargoModel;

class cargo extends BaseController
{
    public function index()
    {
        $cargoModel = new cargoModel();
 
        $todos = $cargoModel->findAll();
 
        foreach ($todos as $key => $linha) {
            $todos[$key]['delete'] = '<a href="cargodelete/' . $linha['TB_CARGO_ID'] . '"> DELETAR </a>' ;
            $todos[$key]['update'] = '<a href="cargoupdate/' . $linha['TB_CARGO_ID'] . '"> ATUALIZAR </a>' ;
        }

        $data['tabela'] = $todos;
        echo view('automovelList', $data);
    }
 
    public function insert()
    {
        if(isset($this->request->getPost()['TB_CARGO_ID'])) {
            $id = $this->request->getPost()['TB_CARGO_ID'];
        } else {
            $id = FALSE;
        }

        $cargoModel = new cargoModel();

        $this->TB_CARGO_NOME = $this->request->getPost()['TB_CARGO_NOME'];

        $data = [
            'TB_CARGO_NOME' => $this->TB_CARGO_NOME
            ];

        if($id != FALSE) {
            $data['TB_CARGO_ID'] = $id;
        }

        $result = $cargoModel->save($data);

        var_dump($result);
    }

    public function update($id = FALSE)
    {
        if(isset($this->request->getPost()['TB_CARGO_ID'])) {
            $id = $this->request->getPost()['TB_CARGO_ID'];
        } else {
            $id = FALSE;
        }

        $cargoModel = new cargoModel();

        $this->TB_CARGO_NOME = $this->request->getPost()['TB_CARGO_NOME'];

        $data = [
            'TB_CARGO_NOME' => $this->TB_CARGO_NOME
            ];

        if($id != FALSE) {
            $data['TB_CARGO_ID'] = $id;
        }

        $result = $cargoModel->save($data);

        var_dump($result);
    }

    public function cargodelete($id = FALSE)
    {
        $cargoModel = new cargoModel();
		
		$cargoModel->delete($id);
		
		return redirect()->back();
    }

    public function cargoinsert()
    {
        echo view('cargoInsert');
    }

    public function cargoupdate($id = null)
    {
        $cargoModel = new cargoModel();

        $select = $cargoModel->find($id);

        $data['edit'] = $select;
        echo view('cargoUpdate', $data);
    }
}
