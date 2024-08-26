<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Nuevo Ciudadano</h3>

            <form action="<?= base_url('guardar_ciudadano') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="dpi" class="form-label">DPI</label>
                    <input type="number" class="form-control" id="dpi" name="dpi" required autofocus>
                </div>

                <div class="col-md-8">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="col-md-8">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>

                <div class="col-md-4">
                    <label for="tel_casa" class="form-label">Teléfono Casa</label>
                    <input type="number" class="form-control" id="tel_casa" name="tel_casa" required>
                </div>

                <div class="col-md-4">
                    <label for="tel_movil" class="form-label">Teléfono Móvil</label>
                    <input type="number" class="form-control" id="tel_movil" name="tel_movil" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>

                <div class="col-md-6">
                    <label for="fechanac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fechanac" name="fechanac" required>
                </div>

                <div class="col-md-4">
                    <label for="cod_nivel_acad" class="form-label">Código Nivel Acádemico</label>
                    <input type="number" class="form-control" id="cod_nivel_acad" name="cod_nivel_acad" required>
                </div>

                <div class="col-md-4">
                    <label for="cod_muni" class="form-label">Código Municipio</label>
                    <input type="number" class="form-control" id="cod_muni" name="cod_muni" required>
                </div>

                <div class="col-md-8">
                    <label for="contra" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="contra" name="contra" required>
                </div>

                <div class="col-12">
                    <a href="<?= base_url('index'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>