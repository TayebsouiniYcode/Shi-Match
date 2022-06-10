<div class="profile bg-light rounded p-4">
    <div class="aside d-flex align-items-end flex-wrap gap-5">
        <div class="profile-image">
            <img class="player-image-cercle" src="/assets/img/player.jpg" alt="" width="200">
        </div>
        <div class="informations-header">
            <h3 class="name">Tayeb SOUINI</h3>
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
            <div class="row">
                <form action="" class="col-12 col-md-8">
                    <fieldset>
                        <legend class="text-muted">Password</legend>
                        <div class="form-group">
                            <label for="current_password" class="form-label">Current password</label>
                            <input type="password" name="current_password" id="current_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="new_password" class="form-label">Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password" class="form-label">Confirm password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        </div>
                        <div class="buttons mt-5">
                            <input class="btn btn-primary" type="submit" value="Save">
                        </div>
                    </fieldset>
                </form>
                <div class="col-md-1"></div>
                <div class="col-12 col-md-3">
                    <a href="/deleteUser" class="btn text-light bg-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>