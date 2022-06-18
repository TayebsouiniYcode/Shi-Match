<div class="team-match">
    
    <div class="match-details row bg-light mt-5 p-5">
        <span class="col-12 col-md-4 text-center">
            <?php echo $team_1->name; ?>
        </span>
        <span class="col-12 col-md-4 text-center">
            Vs
        </span>
        <span class="col-12 col-md-4 text-center">
            <?php echo $team_2->name; ?>
        </span>
    </div>
    <form action="" class="team-match-informations" method="post">
        <input type="hidden" name="teamOneId" value="<?php echo $team_1->id; ?>">
        <input type="hidden" name="teamTwoId" value="<?php echo $team_2->id; ?>">
        <div class="form-group">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" name="date" id="date">
        </div>
        <div class="form-group">
            <label for="time" class="form-label">Time</label>
            <input type="time" class="form-control" name="time" id="time">
        </div>
        <div class="form-group">
            <input class="form-control btn btn-primary mt-5" type="submit" value="Confirm">
        </div>
    </form>
</div>
