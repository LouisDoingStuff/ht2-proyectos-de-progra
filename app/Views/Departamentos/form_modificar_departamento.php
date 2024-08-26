<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Departamento</h3>

            <form action="<?= base_url('modificar_departamento') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="cod_depto" class="form-label">CODIGO DEPARTAMENTO</label>
                    <input type="number" class="form-control" id="cod_depto" name="cod_depto" required autofocus
                    value="<?php $datos['cod_depto']?>">
                </div>

                <div class="col-md-8">
                    <label for="nombre_depto" class="form-label">NOMBRE DEPARTAMENTO</label>
                    <input type="text" class="form-control" id="nombre_depto" name="nombre_depto" required
                    value="<?php $datos['nombre_depto']?>">
                </div>

                <div class="col-md-4">
                    <label for="cod_region" class="form-label">CODIGO REGION</label>
                    <input type="number" class="form-control" id="cod_region" name="cod_region" required autofocus
                    value="<?php $datos['cod_region']?>">
                </div>


                <div class="col-12">
                    <a href="<?= base_url('departamentos'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>