<div class="row">
    <div class="col-5 mt-4" style="margin-left: 20%;">
        <div class=" card mt-3">
            <img src="<?php echo URL_ROUTE ?>media/images/system/loginheader.jpg" class="card-img-top">
            <div class="card-body">
                <form action="<?php echo URL_ROUTE ?>auth/login" method="post">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text material-icons">person</div>
                        </div>
                        <input type="email" class="form-control" id="email-user" name="user-email" placeholder="example@email.com">
                        <div class="invalid-feedback">Email no valido</div>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text material-icons">lock</div>
                        </div>
                        <input type="password" class="form-control" id="password" name="user-password" placeholder="********">
                        <div class="invalid-feedback">Email no valido</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="login">Iniciar Sesión</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-center" href="#">Forgot password?</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo URL_ROUTE; ?>js/users.js"></script>