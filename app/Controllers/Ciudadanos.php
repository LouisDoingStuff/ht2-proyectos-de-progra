<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CiudadanosModel;

class Ciudadanos extends BaseController
{
    /**
     * DATOS DE LA TABLA
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $db=\Config\Database::connect();
        $query = $db -> query("SELECT * FROM ciudadanos");
        $data=['ciudadanos'=>$query->getResult()];
        return view('ciudadanos/index', $data);
        
    }

    /** 
     * DATOS DE TABLA
     * @return ResponseInterface
     */
    public function nuevoCiudadano():string
    {
        return view('ciudadanos/form_nuevo_ciudadano');
    }


    /**
     * GUARDAR NUEVO DATO
     *
     * @return ResponseInterface
     */
    public function guardarCiudadano(){
        $ciudadanos = new CiudadanosModel();
        $datos = [
            'dpi' => $this->request->getPost('dpi'),
            'apellido'=> $this->request->getPost('apellido'),
            'nombre'=> $this->request->getPost('nombre'),
            'direccion'=> $this->request->getPost('direccion'),
            'tel_casa'=> $this->request->getPost('tel_casa'),
            'tel_movil'=> $this->request->getPost('tel_movil'),
            'email'=> $this->request->getPost('email'),
            'fechanac'=> $this->request->getPost('fechanac'),
            'cod_nivel_acad'=> $this->request->getPost('cod_nivel_acad'),
            'cod_muni'=> $this->request->getPost('cod_muni'),
            'contra'=> $this->request->getPost('contra')
            
        ];
        print_r($datos);
        $ciudadanos->insert($datos);
        return redirect()->route('ver_ciudadanos');
    }

       /**
     * ELIMINAR COSSSAS
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function eliminarCiudadano($dpi = null){
        //echo "DPI: ". $dpi;
        $ciudadano = new CiudadanosModel();
        $ciudadano ->delete(['dpi'=>$dpi]);
        return redirect()->route('ver_ciudadanos');
    }

    /**
     * BUSCAR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function buscarCiudadano($dpi = null)
    {
        $ciudadano = new CiudadanosModel();
        $datos['datos']=$ciudadano->where(['dpi'=>$dpi])->first();
        return view('ciudadanos/form_modificar_ciudadano',$datos);
    }

    /**
     * MODIFICARRRR
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function modificarCiudadano(){
        $ciudadanos = new CiudadanosModel();

        $datos=[
            'dpi' => $this->request->getPost('dpi'),
            'apellido'=> $this->request->getPost('apellido'),
            'nombre'=> $this->request->getPost('nombre'),
            'direccion'=> $this->request->getPost('direccion'),
            'tel_casa'=> $this->request->getPost('tel_casa'),
            'tel_movil'=> $this->request->getPost('tel_movil'),
            'email'=> $this->request->getPost('email'),
            'fechanac'=> $this->request->getPost('fechanac'),
            'cod_nivel_acad'=> $this->request->getPost('cod_nivel_acad'),
            'cod_muni'=> $this->request->getPost('cod_muni'),
            'contra'=> $this->request->getPost('contra')
        ];
        $ciudadanos->update($datos['dpi'],$datos);
        return redirect()->route('ver_ciudadanos');
    }

 
}
