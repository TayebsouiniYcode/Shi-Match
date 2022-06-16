<div class="primary-content col-lg-9 col-12">
    <div class="team-card row bg-light">
        <div class="team-image col-12 col-md-4">
            <img src="/assets/img/team-logo2.png" alt="" height="200">
        </div>
        <div class="team-infos col-12 col-md-8">
            <h2><?php echo $team->name; ?> <em>(7/<?php echo $team->number_max_of_players; ?>)</em></h2>
            <p>
                <?php echo $team->city; ?>, <?php echo $team->country; ?>
            </p>
            <div class="team-stats mt-3 d-flex justify-content-between gap-2 w-50">
                <div class="win d-flex w-100">
                    <div class="badge-stats win-title bg-success w-75 text-center me-2">
                        <span class="fs-8 text-light w-100">Win</span>
                    </div>
                    <div class="win-number w-25">
                        <span class="w-25"><?php echo $team->win; ?></span>
                    </div>
                </div>
                <div class="loss d-flex rounded w-100">
                    <div class="badge-stats loss-title bg-danger w-75 text-center me-2">
                        <span class="fs-8 text-light">Loss</span>
                    </div>
                    <div class="loss-number w-25">
                        <span><?php echo $team->loss; ?></span>
                    </div>
                </div>
                <div class="draw d-flex rounded w-100">
                    <div class="badge-stats draw-title bg-warning w-75 text-center me-2">
                        <span class="fs-8 text-light">Draw</span>
                    </div>
                    <div class="draw-number w-25">
                        <span><?php echo $team->draw; ?></span>
                    </div>
                </div>
            </div>
            <div class="mt-4 d-flex justify-content-end gap-3">
                <a class="btn bg-warning text-light" href="/editTeam?id=<?php echo $team->id;?>">Edit</a>
                <a class="btn bg-danger text-light" href="/deleteTeam?id=<?php echo $team->id;?>">Delete</a>
            </div>
            <p class="mt-4">
                <!-- <strong>Matchs: </strong> <span>51</span>
                <br>
                <strong>Goals: </strong> <span>43</span> -->
            </p>
        </div>
    </div>
</div>
<div class="secondary-content col-12 col-lg-3 ">
    <div class="top-rating bg-light rounded pb-3">
        <div class="p-3">
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

    <div class="action bg-light rounded p-3 mt-3 d-flex gap-3 justify-content-between">
        <button class="btn bg-warning text-light w-50">Ban</button>
        <button class="btn bg-danger text-light w-50">Delete</button>
    </div>
</div>