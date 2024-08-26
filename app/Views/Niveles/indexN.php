<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3" id="titulo">Niveles Acádemicos</h3>

            <a href="<?= base_url('nuevo_nivel') ?>" class="btn btn-success">Agregar</a>

            <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DESCRIPCIÓN</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <?php
                foreach($niveles as $nivel):
                ?>
                <tr>
                    <td><?php echo $nivel->cod_nivel_acad; ?></td>
                    <td><?php echo $nivel->nombre; ?></td>
                    <td><?php echo $nivel->descripcion; ?></td>

                    <td>
                        <a href="<?= base_url('eliminar_nivel/' . $nivel->cod_nivel_acad); ?>" class="btn btn-danger">Eliminar</a>
                        <a href="<?= base_url('buscar_nivel/' . $nivel->cod_nivel_acad); ?>" class="btn btn-info">Modificar</a>
                    </td>

                    </td>
                </tr>
                <?php endforeach; ?>
                <tbody>

                </tbody>
            </table>
<?= $this->endSection('contenido'); ?>