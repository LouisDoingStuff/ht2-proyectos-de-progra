<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartamentosModel;

class Departamentos extends BaseController{
    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM departamentos");
        $data=['departamentos'=>$query->getResult()];
        return view('departamentos/indexD', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoDepartamento():string
    {
        return view('departamentos/form_nuevo_departamento');
    }

    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarDepartamento(){
        $departamentos = new DepartamentosModel();
        $datos = [
            'cod_depto' => $this->request->getPost('cod_depto'),
            'nombre_depto'=> $this->request->getPost('nombre_depto'),
            'cod_region'=> $this->request->getPost('cod_region'),
        ];
        print_r($datos);
        $departamentos->insert($datos);
        return redirect()->route('ver_departamentos');
    }

       /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarDepartamento($cod_depto = null){
        $departamentos = new DepartamentosModel();
        $departamentos ->delete(['cod_depto'=>$cod_depto]);
        return redirect()->route('ver_departamentos');
    }

    /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarDepartamento($cod_depto = null)
    {
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->where(['cod_depto'=>$cod_depto])->first();
        return view('departamentos/form_modificar_departamento',$datos);
    }

    /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarDepartamento(){
        $departamentos = new DepartamentosModel();

        $datos=[
            'cod_depto' => $this->request->getPost('cod_depto'),
            'nombre_depto'=> $this->request->getPost('nombre_depto'),
            'cod_region'=> $this->request->getPost('cod_region'),
        ];
        $departamentos->update($datos['cod_depto'],$datos);
        return redirect()->route('ver_departamentos');
    }
}