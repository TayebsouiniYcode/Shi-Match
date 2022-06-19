<?php 

use app\models\TeamModel; 

?>
<div class="primary-content col-lg-12 col-12">
    
    <div class="create-team mt-5">
        <a class="btn btn-primary w-100" href="/addTeam">Create team</a>
    </div>
    <div class="search-bar mt-5 p-3 bg-light rounded ">
        <form action="" >
            <div class="fields d-flex gap-3">
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="form-label">Rank</label>
                    <input class="form-control" type="text" name="rank" placeholder="Rank">
                </div>
                <div class="form-group">
                    <label class="form-label">City</label>
                    <input class="form-control" type="text" name="city" placeholder="City">
                </div>
                <div class="form-group">
                    <label class="form-label">Player</label>
                    <input class="form-control" type="text" name="player" placeholder="Player">
                </div>
            </div>
            <div class="buttons d-flex justify-content-end">
                <input type="submit" class="btn btn-primary mt-4" value="find">
            </div>
        </form>
    </div>

    <div class="teams-list my-5 rounded d-flex flex-wrap justify-content-between gap-2">
    
    <?php foreach($teams as $value) : ?>
    <?php  $team = new TeamModel(); $team->loadData($value);?>
    <div class="team-card bg-light rounded-3 w-30 p-3 text-center" >
    <a class="text-dark text-decoration-none" href="/teamDetails?id=<?php echo $team->id; ?>">
            <div class="team-logo mt-2">
                    <img src="/assets/img/<?php echo $team->image ?? 'team-logo.png'; ?>" alt="" width="150" height="150">
            </div>
            <div class="team-name mt-3">
                <h5><?php echo $team->name; ?></h5>
            </div>
            <div class="team-stats mt-3 d-flex justify-content-between gap-2">
                <div class="win d-flex w-100">
                    <div class="badge-stats win-title bg-success w-75">
                        <span class="fs-8 text-light w-100">Win</span>
                    </div>
                    <div class="win-number w-25">
                        <span class="w-25"><?php echo $team->win; ?></span>
                    </div>
                </div>
                <div class="loss d-flex rounded w-100">
                    <div class="badge-stats loss-title bg-danger w-75">
                        <span class="fs-8 text-light">Loss</span>
                    </div>
                    <div class="loss-number w-25">
                        <span><?php echo $team->loss; ?></span>
                    </div>
                </div>
                <div class="draw d-flex rounded w-100">
                    <div class="badge-stats draw-title bg-warning w-75">
                        <span class="fs-8 text-light">Draw</span>
                    </div>
                    <div class="draw-number w-25">
                        <span><?php echo $team->draw; ?></span>
                    </div>
                </div>
            </div>
            <div class="team-info bg-light d-flex flex-column mt-3">
                <span>Country : <?php echo $team->country; ?></span>
                <span>City : <?php echo $team->city; ?></span>
                <span>Players : 5/ <?php echo $team->number_max_of_players; ?></span>
                <span>Age : <?php echo $team->min_age; ?> - <?php echo $team->max_age; ?></span>
            </div>
        </div>
    </a>
        <?php endforeach; ?>
    </div>
</div>
<!-- <div class="secondary-content col-12 col-lg-3 ">
    <div class="top-rating bg-light rounded pb-3">
        <div class="p-3 mt-5 ">
            <h3 class="text-center">Top rating</h3>
            <div class="d-flex justify-content-between my-3">
                <span>Khalid</span> <span>86%</span>  <span>Namek</span>
            </div>
            <div class="d-flex justify-content-between my-3">
                <span>Azeddine</span> <span>85%</span>  <span>Aliens</span>
            </div>
            <div class="d-flex justify-content-between my-3">
                <span>Khalil</span> <span>73%</span>  <span>Error 404</span>
            </div>
        </div>
        <div class="boutons d-flex justify-content-center">
            <a class="btn btn-primary" href="#">View all players</a>
        </div>
    </div>


    <div class="matchs bg-light rounded pb-3">
        <div class="p-3 mt-5 ">
            <h3 class="text-center">Matchs</h3>
            <div class="d-flex justify-content-between my-3">
                <span>Khalid</span> <span>25</span>  <span>Namek</span>
            </div>
            <div class="d-flex justify-content-between my-3">
                <span>Azeddine</span> <span>23</span>  <span>Aliens</span>
            </div>
            <div class="d-flex justify-content-between my-3">
                <span>Khalil</span> <span>19</span>  <span>Error 404</span>
            </div>
        </div>
        <div class="boutons d-flex justify-content-center">
            <a class="btn btn-primary" href="#">View all Matchs</a>
        </div>
    </div>

    <div class="matchs bg-light rounded pb-3 mt-5 d-flex justify-content-center">
        <a href="/addTeam" class="btn btn-primary w-100">Create Team</a>
    </div>
</div> -->