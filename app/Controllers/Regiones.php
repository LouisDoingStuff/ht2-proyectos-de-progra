<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegionesModel;

class Regiones extends BaseController{
    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM regiones");
        $data=['regiones'=>$query->getResult()];
        return view('regiones/indexR', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoRegion():string
    {
        return view('regiones/form_nuevo_region');
    }

    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarRegion(){
        $regiones = new RegionesModel();
        $datos = [
            'cod_region' => $this->request->getPost('cod_region'),
            'nombre'=> $this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion')
        ];
        print_r($datos);
        $regiones->insert($datos);
        return redirect()->route('ver_regiones');
    }

       /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarRegion($cod_region = null){
        $regiones = new RegionesModel();
        $regiones ->delete(['cod_region'=>$cod_region]);
        return redirect()->route('ver_regiones');
    }

    /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarRegion($cod_region = null)
    {
        $regiones = new RegionesModel();
        $datos['datos']=$regiones->where(['cod_region'=>$cod_region])->first();
        return view('regiones/form_modificar_region',$datos);
    }

    /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarRegion(){
        $regiones = new RegionesModel();

        $datos=[
            'cod_region' => $this->request->getPost('cod_region'),
            'nombre'=> $this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion')
        ];
        $regiones->update($datos['cod_region'],$datos);
        return redirect()->route('ver_regiones');
    }
}