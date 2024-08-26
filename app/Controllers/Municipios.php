<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MunicipiosModel;

class Municipios extends BaseController{
    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM municipios");
        $data=['municipios'=>$query->getResult()];
        return view('municipios/indexM', $data);
        
    }

        /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoMunicipio():string
    {
        return view('municipios/form_nuevo_municipio');
    }

    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarMunicipio(){
        $municipios = new MunicipiosModel();
        $datos = [
            'cod_muni' => $this->request->getPost('cod_muni'),
            'nombre_municipio'=> $this->request->getPost('nombre_municipio'),
            'cod_depto'=> $this->request->getPost('cod_depto')
        ];
        print_r($datos);
        $municipios->insert($datos);
        return redirect()->route('ver_municipios');
    }

       /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarMunicipio($cod_muni = null){
        $municipios = new MunicipiosModel();
        $municipios ->delete(['cod_muni'=>$cod_muni]);
        return redirect()->route('ver_municipios');
    }

    /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarMunicipio($cod_muni = null)
    {
        $municipios = new MunicipiosModel();
        $datos['datos']=$municipios->where(['cod_muni'=>$cod_muni])->first();
        return view('municipios/form_modificar_municipio',$datos);
    }

    /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarMunicipio(){
        $municipios = new MunicipiosModel();

        $datos=[
            'cod_muni' => $this->request->getPost('cod_muni'),
            'nombre_municipio'=> $this->request->getPost('nombre_municipio'),
            'cod_depto'=> $this->request->getPost('cod_depto')
        ];
        $municipios->update($datos['cod_muni'],$datos);
        return redirect()->route('ver_municipios');
    }
}