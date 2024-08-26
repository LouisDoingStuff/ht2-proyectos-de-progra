<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Nuevo Municipio</h3>

            <form action="<?= base_url('guardar_municipio') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-5">
                    <label for="cod_muni" class="form-label">CODIGO MUNICIPIO</label>
                    <input type="number" class="form-control" id="cod_muni" name="cod_muni" required autofocus>
                </div>

                <div class="col-md-5">
                    <label for="nombre_municipio" class="form-label">NOMBRE MUNICIPIO</label>
                    <input type="text" class="form-control" id="nombre_municipio" name="nombre_municipio" required>
                </div>

                <div class="col-md-5">
                    <label for="cod_depto" class="form-label">CODIGO DEPARTAMENTO</label>
                    <input type="number" class="form-control" id="cod_depto" name="cod_depto" required autofocus>
                </div>

                <div class="col-12">
                    <a href="<?= base_url('municipios'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>