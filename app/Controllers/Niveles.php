<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NivelesacademicosModel;

class Niveles extends BaseController{
    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM nivelesacademicos");
        $data=['niveles'=>$query->getResult()];
        return view('niveles/indexN', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoNivel():string
    {
        return view('niveles/form_nuevo_nivel');
    }

    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarNivel(){
        $niveles = new NivelesacademicosModel();
        $datos = [
            'cod_nivel_acad' => $this->request->getPost('cod_nivel_acad'),
            'nombre'=> $this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion')
        ];
        print_r($datos);
        $niveles->insert($datos);
        return redirect()->route('ver_niveles');
    }

       /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarNivel($cod_nivel_acad = null){
        $niveles = new NivelesacademicosModel();
        $niveles ->delete(['cod_nivel_acad'=>$cod_nivel_acad]);
        return redirect()->route('ver_niveles');
    }

    /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarNivel($cod_nivel_acad = null)
    {
        $niveles = new NivelesacademicosModel();
        $datos['datos']=$niveles->where(['cod_nivel_acad'=>$cod_nivel_acad])->first();
        return view('niveles/form_modificar_nivel',$datos);
    }

    /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarNivel(){
        $niveles = new NivelesacademicosModel();

        $datos=[
            'cod_nivel_acad' => $this->request->getPost('cod_nivel_acad'),
            'nombre'=> $this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion')
        ];
        $niveles->update($datos['cod_nivel_acad'],$datos);
        return redirect()->route('ver_niveles');
    }
}