<div class="col-10 mt-2">
    <h4 class="mb-3">Agregar nuevo socio</h4>
    <form method="post" id="register-user" action="<?php echo URL_ROUTE ?>users/store" target="_top" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label for="name-user">Nombre</label>
                    <input type="text" name="user-name" class="form-control" id="name-user"  maxlength ="80"  required placeholder="Ingresar nombre">
                </div>
                <div class="form-group">
                    <label for="lastname-user">Apellido</label>
                    <input type="text" name="user-lastname" class="form-control" id="lastname-user" required placeholder="Ingresar apellido">
                </div>
                <div class="form-group">
                    <label for="email-user">Email</label>
                    <input type="email" name="user-email" id="email-user" class="form-control"  maxlength ="100"  placeholder="Ingresar dirección de email">
                    <div class="invalid-feedback">Email no valido</div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <img class="justify-content-end" id="cover-preview" for="cover-img" src="<?php echo URL_ROUTE; ?>media/images/system/default-user.png"></label>
                    <input name="user-dni" type="file" class="form-control-file" accept="image/*" id="cover-img">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="doc-user">DNI</label>
                <input type="text" name="user-doc" id="doc-user" class="form-control justNumbers"  maxlength ="8" placeholder="Ingresar número de documento" required>
                <input type="hidden" name="user-pass" id="pass-user" class="form-control" placeholder="Se generará automaticamente una contraseña">
                <div class="invalid-feedback">Número dni no valido</div>
            </div>
            <div class="form-group col-6">
                <label for="phone-user">Teléfono</label>
                <input type="text" name="user-phone" id="phone-user" class="form-control justNumbers"   maxlength ="15" placeholder="Ingresar número de teléfono" required>
                <div class="invalid-feedback">Número de teléfono no valido</div>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-6">
                <label for="address-user">Dirección</label>
                <input type="texx" name="user-address" class="form-control" id="address-user" required placeholder="Ingresar dirección">
            </div>
            <div class="form-group col-6">
                <div class="form-group">
                    <label for="user-school">Tipo de Usuario</label>
                    <select name="user-type" id="user-type" class="form-control" required>
                        <option value="20" disabled selected>Seleccionar usuario</option>
                        <?php
                            foreach ($param["usertypes"] as $key => $value) {
                                echo "<option value=$value->user_type_id>$value->user_type_desc</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row" id="academic-data">
            <div class="form-group col-6">
                <div class="form-group">
                    <label for="user-school">Escuela</label>
                    <select name="school-user" id="user-school" data-url="<?php echo URL_ROUTE ?>careers/show" class="form-control" required>
                        <option value="5" selected>Seleccionar escuela</option>
                        <?php
                            foreach ($param["schools"] as $key => $value) {
                                echo "<option value=$value->school_id>$value->school_name</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-6">
                <div class="form-group">
                    <label for="user-career">Carrera</label>
                    <select name="career-user" id="user-career" class="form-control" required disabled>
                        <option value="20"  selected>Seleccionar carrera</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" id="submit" class="form-control btn btn-primary" name="user-register">Guardar</button>
        </div>
    </form>
</div>
<script type="text/javascript" src="<?php echo URL_ROUTE; ?>js/users.js"></script>