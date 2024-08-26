<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Región</h3>

            <form action="<?= base_url('modificar_region') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="cod_region" class="form-label">CODIGO REGION</label>
                    <input type="number" class="form-control" id="cod_region" name="cod_region" required autofocus
                    value="<?php $datos['cod_region']?>">
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">NOMBRE REGION</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required
                    value="<?php $datos['nombre']?>">
                </div>

                <div class="col-md-8">
                    <label for="descripcion" class="form-label">DESCRIPCIÓN</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required
                    value="<?php $datos['descripcion']?>">
                </div>


                <div class="col-12">
                    <a href="<?= base_url('regiones'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>