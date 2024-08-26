<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Municipio</h3>

            <form action="<?= base_url('modificar_municipio') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="cod_muni" class="form-label">CODIGO MUNICIPIO</label>
                    <input type="number" class="form-control" id="cod_muni" name="cod_muni" required autofocus
                    value="<?php $datos['cod_muni']?>">
                </div>

                <div class="col-md-8">
                    <label for="nombre_municipio" class="form-label">NOMBRE MUNICIPIO</label>
                    <input type="text" class="form-control" id="nombre_municipio" name="nombre_municipio" required
                    value="<?php $datos['nombre_municipio']?>">
                </div>

                <div class="col-md-4">
                    <label for="cod_depto" class="form-label">CODIGO DEPARTAMENTO</label>
                    <input type="number" class="form-control" id="cod_depto" name="cod_depto" required autofocus
                    value="<?php $datos['cod_depto']?>">
                </div>


                <div class="col-12">
                    <a href="<?= base_url('municipios'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>