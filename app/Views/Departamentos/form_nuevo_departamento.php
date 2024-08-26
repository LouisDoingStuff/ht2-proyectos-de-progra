<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Nuevo Departamento</h3>

            <form action="<?= base_url('guardar_departamento') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-5">
                    <label for="cod_depto" class="form-label">CODIGO DEPARTAMENTO</label>
                    <input type="number" class="form-control" id="cod_depto" name="cod_depto" required autofocus>
                </div>

                <div class="col-md-5">
                    <label for="nombre_depto" class="form-label">NOMBRE DEPARTAMENTO</label>
                    <input type="text" class="form-control" id="nombre_depto" name="nombre_depto" required>
                </div>

                <div class="col-md-5">
                    <label for="cod_region" class="form-label">CODIGO REGION</label>
                    <input type="number" class="form-control" id="cod_region" name="cod_region" required autofocus>
                </div>

                <div class="col-12">
                    <a href="<?= base_url('departamentos'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>