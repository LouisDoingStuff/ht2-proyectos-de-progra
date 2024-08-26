<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">Ciudadanos</h3>

            <a href="<?= base_url('nuevo_ciudadano') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">DPI</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Telefono Casa</th>
                        <th scope="col">Telefono Movil</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Codigo Nivel Academico</th>
                        <th scope="col">Codigo Municipio</th>
                        <th scope="col">Contraseña</th>
                    </tr>
                </thead>
                <?php
                foreach($ciudadanos as $ciudadano):
                ?>
                <tr>
                    <td><?php echo $ciudadano->dpi; ?></td>
                    <td><?php echo $ciudadano->apellido; ?></td>
                    <td><?php echo $ciudadano->nombre; ?></td>
                    <td><?php echo $ciudadano->direccion; ?></td>
                    <td><?php echo $ciudadano->tel_casa; ?></td>
                    <td><?php echo $ciudadano->tel_movil; ?></td>
                    <td><?php echo $ciudadano->email; ?></td>
                    <td><?php echo $ciudadano->fechanac; ?></td>
                    <td><?php echo $ciudadano->cod_nivel_acad; ?></td>
                    <td><?php echo $ciudadano->cod_muni; ?></td>
                    <td><?php echo $ciudadano->contra; ?></td>
                    <td>
                        <a href="<?= base_url('eliminar_ciudadano/' . $ciudadano->dpi); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_ciudadano/' . $ciudadano->dpi); ?>" class="btn btn-info">Modificar</a>
                    </td>

                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>

                </tbody>
            </table>



<?= $this->endSection('contenido'); ?>