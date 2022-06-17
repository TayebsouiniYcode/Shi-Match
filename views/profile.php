<div class="profile bg-light rounded p-4 mt-5 mb-5">
    <div class="aside d-flex align-items-end flex-wrap gap-5 justify-content-center justify-content-md-start">
        <div class="profile-image">
            <img class="player-image-cercle" src="/assets/img/player.jpg" alt="" width="200">
        </div>
        <div class="informations-header">
            <h3 class="name">Tayeb SOUINI <a class="btn btn-primary" href="/teamDetails?id=<?php echo $user->team->id; ?>"> (<?php echo $user->team->name; ?>) </a></h3>
        </div>
    </div>
    <div class="informations mt-5 row">
        <div class="profile-menu col-12 col-md-3">
            <div class="w-100 d-flex flex-column ms-5">
                <div class="">
                    <a href="/profile" class="nav-link">Edit profile</a>
                </div>
                <div class="">
                    <a href="./notifications" class="nav-link">Notifications</a>
                </div>
                <div class="">
                    <a href="./editPassword" class="nav-link">Password & Security</a>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="informations-form col-12 col-md-8">
            <div class="top-infos d-flex justify-content-between">
                <h5 class="title">Edit Profile</h5>
                <span class="text-muted">last update August 1</span>
            </div>
            <!-- <form action="" class="row"> -->
            <div class="row">
            <?php $form = app\core\form\Form::begin('', "post"); ?>
                <input type="hidden" name="id" value="<?php echo $user->id;?>">
                <fieldset class="mt-3 col-md-12">
                    <legend class="text-muted">Personel</legend>
                    <div class="form-group d-flex justify-content-between gap-2">
                        <div class="firstname w-50">
                            <!-- <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" value="Tayeb"> -->
                            <?php echo $form->field($user, 'firstname'); ?>
                        </div>
                        <div class="lastname w-50">
                            <!-- <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" value="SOUINI"> -->
                            <?php echo $form->field($user, 'lastname'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="date_of_birth" class="form-label">Date of birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="Morocco"> -->
                        <?php echo $form->field($user, 'age'); ?>
                    </div>
                    <div class="form-group">
                        <!-- <label for="country" class="form-label">Country</label>
                        <input type="text" name="country" id="country" class="form-control" value="Morocco"> -->
                        <?php //echo $form->field($user, 'address'); ?>
                    </div>
                    <div class="form-group">
                        <!-- <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" value="Youssoufia"> -->
                        <?php //echo $form->field($user, 'city'); ?>
                    </div>
                </fieldset>
                <fieldset class="mt-3 col-md-12">
                    <legend class="text-muted">Contact</legend>
                    <div class="form-group">
                        <!-- <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="Tayebsouini.2@gmail.com"> -->
                        <?php echo $form->field($user, 'email'); ?>
                    </div>
                    <div class="form-group">
                        <!-- <label for="phone" class="form-label">Phone number</label>
                        <input type="tel" name="phone" id="phone" class="form-control" value="0607189671"> -->
                        <?php echo $form->field($user, 'phone'); ?>
                    </div>
                </fieldset>
                <div class="buttons mt-5">
                    <input class="btn btn-primary" type="submit" value="Save">
                </div>
            <?php app\core\form\Form::begin("/updateProfile", "post"); ?>
            <div>
        </div>
    </div>
</div>