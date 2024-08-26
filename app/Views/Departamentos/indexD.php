<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">Departamentos</h3>

            <a href="<?= base_url('nuevo_departamento') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CODIGO REGION</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <?php
                foreach($departamentos as $departamento):
                ?>
                <tr>
                    <td><?php echo $departamento->cod_depto; ?></td>
                    <td><?php echo $departamento->nombre_depto; ?></td>
                    <td><?php echo $departamento->cod_region; ?></td>

                    <td>
                        <a href="<?= base_url('eliminar_departamento/' . $departamento->cod_depto); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_departamento/' . $departamento->cod_depto); ?>" class="btn btn-info">Modificar</a>
                    </td>

                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>

                </tbody>
            </table>



<?= $this->endSection('contenido'); ?>