<div class="primary-content col-lg-12 col-12 mt-5">
    <div class="player-card row bg-light">
        <div class="player-image col-12 col-md-4">
            <img class="player-image-cercle" src="/assets/img/player.jpg" alt="" height="200" width="200">
        </div>
        <div class="team-infos col-12 col-md-8">
            <h2><?php echo $user->firstname . ' ' . $user->lastname; ?> <em>(<?php echo $user->age; ?>)</em></h2>
            <p class="mt-4">
                <strong>Team: </strong> <span><?php echo $team->name;?></span>
                <br>
                <strong>Poste: </strong> <span><?php echo $player->post; ?></span>
                <br>
                <strong>Matchs: </strong> <span>92 (statique)</span>
                <br>
                <strong>Goals: </strong> <span>43 (statique)</span>
            </p>
        </div>
    </div>
</div>
<!-- <div class="secondary-content col-12 col-lg-3 ">
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
    </div> -->


    <!-- <div class="matchs bg-light rounded pb-3">
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
</div>-->