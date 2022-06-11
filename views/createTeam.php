<div class="create-team bg-light rounded">
    <h2>Create team</h2>
    <div class="create-team-form">
        <form action="">
            <div class="form-group">
                <label for="team_name" class="form-label">Team name</label>
                <input type="text" name="team_nama" id="team_name" class="form-control" placeholder="Team name">
            </div>
            <div class="form-group">
                <label for="quote" class="form-label">Quote</label>
                <input type="text" name="quote" id="quote" class="form-control" placeholder="Quote">
            </div>
            <div class="d-flex gap-4">
                <div class="form-group w-50">
                    <label for="age_min" class="form-label">Age min</label>
                    <input type="number" name="age_min" id="age_min" class="form-control" placeholder="16">
                </div>
                <div class="form-group w-50">
                    <label for="age_max" class="form-label">Age max</label>
                    <input type="number" name="age_max" id="age_max" class="form-control" placeholder="28">
                </div>
            </div>
            <div class="d-flex gap-4">
                <div class="form-group w-50">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" id="country" class="form-control" placeholder="Country">
                </div>
                <div class="form-group w-50">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" placeholder="City">
                </div>
                <div class="form-group w-50">
                    <label for="postale_code" class="form-label">Postale code</label>
                    <input type="number" name="postale_code" id="postale_code" class="form-control" placeholder="Postale code">
                </div>
            </div>
            <div class="form-group">
                <label for="number_max_of_player" class="form-label">Number max of players</label>
                <input type="number" name="number_max_of_player" id="number_max_of_player" class="form-control" placeholder="Number max of players">
            </div>
            <div class="form-group mt-5">
                <input type="submit" value="Create" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
</div>