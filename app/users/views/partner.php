<div class="media list mt-2 col-12">
    <img class="mr-3" src="<?php echo URL_ROUTE . "media/images/partner/$user->user_img"; ?>" alt="Foto_Socio" style="width: 100px;">
    <div class="media-body">
        <div class="row">
            <?php
            echo "
                    <div class='col-10 icons-users'>
                        <h5 class='mt-0'><a href=''>$user->user_name $user->user_lastname</a></h5>
                        <p><span class='material-icons'>location_on</span>$user->user_address</p>
                        <p><span class='material-icons'>phone</span>$user->user_phone</p>
                        <p><span class='material-icons'>mail</span>$user->user_email</p>
                    </div>
                    <div class='col-2'>
                        <span class='material-icons'><a href='" . URL_ROUTE . "users/edit/$user->user_dni' class='text-info'>edit</a></span>
                        <span class='material-icons'><a href='" . URL_ROUTE . "users/disable/$user->user_dni' class='text-danger'>";
            echo ($user->user_defaulter) ? "close" : "check";
            echo "</a></span></div>";
            ?>
        </div>
    </div>
</div>
<div class="card book-list col-2 mr-3 mb-3">
    <a href="<?php echo URL_ROUTE ?>users/read">
        <img class="card-img-top" src="<?php echo URL_ROUTE . "media/images/partner/$user->user_img"; ?>" alt="profile" style="width: 100%;">
        <p><a href=""><?php echo "$user->user_name $user->user_lastname"; ?></a></p>
    </a>
</div>