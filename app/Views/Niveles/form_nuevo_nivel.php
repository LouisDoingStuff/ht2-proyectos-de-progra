<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Nuevo Nivel</h3>

            <form action="<?= base_url('guardar_nivel') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-5">
                    <label for="cod_nivel_acad" class="form-label">CODIGO NIVEL</label>
                    <input type="number" class="form-control" id="cod_nivel_acad" name="cod_nivel_acad" required autofocus>
                </div>

                <div class="col-md-5">
                    <label for="nombre" class="form-label">NOMBRE NIVEL</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="col-md-5">
                    <label for="descripcion" class="form-label">DESCRIPCION</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                </div>

                <div class="col-12">
                    <a href="<?= base_url('niveles'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>