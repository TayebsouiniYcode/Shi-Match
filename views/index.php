<div class="mt-5 header-section d-flex justify-content-around align-items-center">
    <div class="text">
        <h1 class="text-primary">
            Awsome sport
        </h1>
        <h2 class="text-muted fs-5">
            Find your opponent
        </h2>
        <p class="fs-5">
            Shi-match is a web application to find players near you
        </p>
        <div class="auth">
            <!-- <a class="btn btn-primary text-light" href="/signup" >JOIN US</a> -->
            <button data-bs-toggle="modal" data-bs-target="#signupModel" class="btn btn-primary text-light">JOIN US</button>
        </div>
    </div>
    <div class="image d-none d-md-block">
        <img src="/assets/img/Header_1.png" alt="image" width="" height="400">
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="signupModel" tabindex="-1" aria-labelledby="signupModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php $form = app\core\form\Form::begin('', "post"); ?>
                <div class="form d-flex flex-column algin-items-center mt-2">
                    <div class="row mt-3">
                        <div class="col">
                            <?php echo $form->field($model, 'firstname'); ?>
                        </div>
                        <div class="col">
                            <?php echo $form->field($model, 'lastname'); ?>
                        </div>
                        <div class="col">
                            <?php echo $form->field($model, 'age'); ?>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <?php echo $form->field($model, 'email'); ?>
                        </div>
                        <div class="col">
                            <?php echo $form->field($model, 'phone'); ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <?php echo $form->field($model, 'address'); ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <?php echo $form->selectField($model, 'country', ['Morocco', 'Algeria', 'Mauritania', 'Libya', 'Tunisia', 'Egypt', 'Saudi Arabia']); ?>
                        </div>
                        <div class="col">
                            <?php echo $form->field($model, 'city'); ?>
                        </div>
                        <div class="col">
                            <?php echo $form->field($model, 'postale_code'); ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <?php echo $form->field($model, 'password')->passwordField(); ?>
                        </div>
                        <div class="col">
                            <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
                        </div>
                    </div>
                </div>
                <div class="bouton d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-30 mt-5">Sign up</button>
                </div>
                <?php app\core\form\Form::end(); ?>
            </div>
        </div>
    </div>
</div>
<?php
include '../views/layouts/decoration.php';
?>