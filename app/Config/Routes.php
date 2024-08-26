<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//$routes->get('ciudadanos', 'Ciudadanos::index');
//$routes->get('ciudadanos/new', 'Ciudadanos::new');

$routes->resource('ciudadanos', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('departamentos', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('municipios', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('niveles', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('regiones', ['placeholder' =>'(:num)', 'except' => 'show']);



$routes->get('ver_ciudadanos','Ciudadanos::index');
$routes->get('nuevo_ciudadano','Ciudadanos::nuevoCiudadano');
$routes->post('guardar_ciudadano','Ciudadanos::guardarCiudadano');
$routes->get('eliminar_ciudadano/(:num)','Ciudadanos::eliminarCiudadano/$1');
$routes->get('buscar_ciudadano/(:num)','Ciudadanos::buscarCiudadano/$1');
$routes->post('modificar_ciudadano','Ciudadanos::modificarCiudadano');

////////departamentos
$routes->get('ver_departamentos','Departamentos::index');
$routes->get('nuevo_departamento','Departamentos::nuevoDepartamento');
$routes->post('guardar_departamento','Departamentos::guardarDepartamento');
$routes->get('eliminar_departamento/(:num)','Departamentos::eliminarDepartamento/$1');
$routes->get('buscar_departamento/(:num)','Departamentos::buscarDepartamento/$1');
$routes->post('modificar_departamento','Departamentos::modificarDepartamento');

////////municipios
$routes->get('ver_municipios','Municipios::index');
$routes->get('nuevo_municipio','Municipios::nuevoMunicipio');
$routes->post('guardar_municipio','Municipios::guardarMunicipio');
$routes->get('eliminar_municipio/(:num)','Municipios::eliminarMunicipio/$1');
$routes->get('buscar_municipio/(:num)','Municipios::buscarMunicipio/$1');
$routes->post('modificar_municipio','Municipios::modificarMunicipio');

////////niveles
$routes->get('ver_niveles','Niveles::index');
$routes->get('nuevo_nivel','Niveles::nuevoNivel');
$routes->post('guardar_nivel','Niveles::guardarNivel');
$routes->get('eliminar_nivel/(:num)','Niveles::eliminarNivel/$1');
$routes->get('buscar_nivel/(:num)','Niveles::buscarNivel/$1');
$routes->post('modificar_nivel','Niveles::modificarNivel');

////////regiones
$routes->get('ver_regiones','Regiones::index');
$routes->get('nuevo_region','Regiones::nuevoRegion');
$routes->post('guardar_region','Regiones::guardarRegion');
$routes->get('eliminar_region/(:num)','Regiones::eliminarRegion/$1');
$routes->get('buscar_region/(:num)','Regiones::buscarRegion/$1');
$routes->post('modificar_region','Regiones::modificarRegion');