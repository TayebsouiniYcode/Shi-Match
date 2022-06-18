<div class="create-team bg-light rounded">
    <h2>Create team</h2>
    <div class="create-team-form">
        <?php $form = app\core\form\Form::begin('', 'post'); ?>
            <?php echo $form->field($model, 'created_by')->hiddenField(); ?>
            <?php echo $form->field($model, 'id')->hiddenField(); ?>
            <?php echo $form->field($model, 'image')->hiddenField(); ?>
            <div class="form-group">
                <!-- <label for="team_name" class="form-label">Team name</label>
                <input type="text" name="team_nama" id="team_name" class="form-control" placeholder="Team name"> -->
                <?php echo $form->field($model, 'name'); ?>
            </div>
            <div class="form-group">
                <!-- <label for="quote" class="form-label">Quote</label>
                <input type="text" name="quote" id="quote" class="form-control" placeholder="Quote"> -->
                <?php echo $form->field($model, 'quote'); ?>
            </div>
            <div class="d-flex gap-4">
                <div class="form-group w-50">
                    <!-- <label for="age_min" class="form-label">Age min</label>
                    <input type="number" name="age_min" id="age_min" class="form-control" placeholder="16"> -->
                    <?php echo $form->field($model, 'min_age'); ?>
                </div>
                <div class="form-group w-50">
                    <!-- <label for="age_max" class="form-label">Age max</label>
                    <input type="number" name="age_max" id="age_max" class="form-control" placeholder="28"> -->
                    <?php echo $form->field($model, 'max_age'); ?>
                </div>
            </div>
            <div class="d-flex gap-4">
                <div class="form-group w-50">
                    <!-- <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" id="country" class="form-control" placeholder="Country"> -->
                    <?php echo $form->field($model, 'country'); ?>
                </div>
                <div class="form-group w-50">
                    <!-- <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" placeholder="City"> -->
                    <?php echo $form->field($model, 'city'); ?>
                </div>
                <div class="form-group w-50">
                    <!-- <label for="postale_code" class="form-label">Postale code</label>
                    <input type="number" name="postale_code" id="postale_code" class="form-control" placeholder="Postale code"> -->
                    <?php echo $form->field($model, 'postale_code'); ?>
                </div>
            </div>
            <div class="form-group">
                <!-- <label for="number_max_of_player" class="form-label">Number max of players</label>
                <input type="number" name="number_max_of_player" id="number_max_of_player" class="form-control" placeholder="Number max of players"> -->
                <?php echo $form->field($model, 'number_max_of_players'); ?>
            </div>
            <div class="form-group mt-5">
                <input type="submit" value="Create" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
</div>