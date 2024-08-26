<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

            <h3 class="my-3">Modificar Ciudadano</h3>

            <form action="<?= base_url('modificar_ciudadano') ?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="dpi" class="form-label">DPI</label>
                    <input type="number" class="form-control" id="dpi" name="dpi" required autofocus
                    value="<?php $datos['dpi']?>">
                </div>

                <div class="col-md-8">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required
                    value="<?php $datos['apellido']?>">
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required
                    value="<?php $datos['nombre']?>">
                </div>

                <div class="col-md-8">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required
                    value="<?php $datos['direccion']?>">
                </div>

                <div class="col-md-4">
                    <label for="tel_casa" class="form-label">Teléfono Casa</label>
                    <input type="number" class="form-control" id="tel_casa" name="tel_casa" required
                    value="<?php $datos['tel_casa']?>">
                </div>

                <div class="col-md-4">
                    <label for="tel_movil" class="form-label">Teléfono Móvil</label>
                    <input type="number" class="form-control" id="tel_movil" name="tel_movil" required
                    value="<?php $datos['tel_movil']?>">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                    value="<?php $datos['email']?>">
                </div>

                <div class="col-md-6">
                    <label for="fechanac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fechanac" name="fechanac" required
                    value="<?php $datos['fechanac']?>">
                </div>

                <div class="col-md-4">
                    <label for="cod_nivel_acad" class="form-label">Código Nivel Acádemico</label>
                    <input type="number" class="form-control" id="cod_nivel_acad" name="cod_nivel_acad" required
                    value="<?php $datos['cod_nivel_acad']?>">
                </div>

                <div class="col-md-4">
                    <label for="cod_muni" class="form-label">Código Municipio</label>
                    <input type="number" class="form-control" id="cod_muni" name="cod_muni" required
                    value="<?php $datos['cod_muni']?>">
                </div>

                <div class="col-md-8">
                    <label for="contra" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="contra" name="contra" required
                    value="<?php $datos['contra']?>">
                </div>

                <div class="col-12">
                    <a href="<?= base_url('ciudadanos'); ?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit">Guardar Cambios</button>
                </div>

            </form>


<?= $this->endSection('contenido'); ?>