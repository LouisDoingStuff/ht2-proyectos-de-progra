<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">Municipios</h3>

            <a href="<?= base_url('nuevo_municipio') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CODIGO DEPARTAMENTO</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <?php
                foreach($municipios as $municipio):
                ?>
                <tr>
                    <td><?php echo $municipio->cod_muni; ?></td>
                    <td><?php echo $municipio->nombre_municipio; ?></td>
                    <td><?php echo $municipio->cod_depto; ?></td>

                    <td>
                        <a href="<?= base_url('eliminar_municipio/' . $municipio->cod_muni); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_municipio/' . $municipio->cod_muni); ?>" class="btn btn-info">Modificar</a>
                    </td>

                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>

                </tbody>
            </table>
<?= $this->endSection('contenido'); ?>