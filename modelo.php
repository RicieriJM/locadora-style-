<?php

namespace App\Controllers;

use App\Models\modeloModel;

class modelo extends BaseController
{
    public function index()
    {
        $marcaModel = new modeloModel();
 
        $todos = $marcaModel->findAll();
 
        foreach ($todos as $key => $linha) {
            $todos[$key]['delete'] = '<a href="modelodelete/' . $linha['TB_MODELO_ID'] . '"> DELETAR </a>' ;
            $todos[$key]['update'] = '<a href="modeloupdate/' . $linha['TB_MODELO_ID'] . '"> ATUALIZAR </a>' ;
        }

        $data['tabela'] = $todos;
        echo view('modeloList', $data);
    }
 
    public function insert()
    {
        if(isset($this->request->getPost()['TB_MODELO_ID'])) {
            $id = $this->request->getPost()['TB_MODELO_ID'];
        } else {
            $id = FALSE;
        }

        $modeloModel = new modeloModel();

        $this->TB_MODELO_DESC = $this->request->getPost()['TB_MODELO_DESC'];
        $this->TB_MODELO_OBS = $this->request->getPost()['TB_MODELO_OBS'];
        $this->TB_MODELO_DATA = $this->request->getPost()['TB_MODELO_DATA'];

        $data = [
            'TB_MODELO_DESC' => $this->TB_MODELO_DESC,
            'TB_MODELO_OBS' => $this->TB_MODELO_OBS,
            'TB_MODELO_DATA' => $this->TB_MODELO_DATA,
            ];

        if($id != FALSE) {
            $data['TB_MODELO_ID'] = $id;
        }

        $result = $modeloModel->save($data);

        var_dump($result);
    }

    public function update($id = FALSE)
    {
        if(isset($this->request->getPost()['TB_MODELO_ID'])) {
            $id = $this->request->getPost()['TB_MODELO_ID'];
        } else {
            $id = FALSE;
        }

        $modeloModel = new modeloModel();

        $this->TB_MODELO_DESC = $this->request->getPost()['TB_MODELO_DESC'];
        $this->TB_MODELO_OBS = $this->request->getPost()['TB_MODELO_OBS'];
        $this->TB_MODELO_DATA = $this->request->getPost()['TB_MODELO_DATA'];

        $data = [
            'TB_MODELO_DESC' => $this->TB_MODELO_DESC,
            'TB_MODELO_OBS' => $this->TB_MODELO_OBS,
            'TB_MODELO_DATA' => $this->TB_MODELO_DATA,
            ];

        if($id != FALSE) {
            $data['TB_MODELO_ID'] = $id;
        }

        $result = $modeloModel->save($data);

        var_dump($result);
    }

    public function modelodelete($id = FALSE)
    {
        $modeloModel = new modeloModel();
		
		$modeloModel->delete($id);
		
		return redirect()->back();
    }

    public function modeloinsert()
    {
        echo view('modeloInsert');
    }

    public function modeloupdate($id = null)
    {
        $modeloModel = new modeloModel();

        $select = $modeloModel->find($id);

        $data['edit'] = $select;
        echo view('modeloUpdate', $data);
    }
}
