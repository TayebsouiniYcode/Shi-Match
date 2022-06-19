<div class="primary-content  col-lg-12 col-12 ">
    <div class="search-bar mt-5 p-3 bg-light rounded ">
        <form action="" >
            <div class="fields d-flex gap-3">
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="form-label">age</label>
                    <input class="form-control" type="text" name="age" placeholder="Age">
                </div>
                <div class="form-group">
                    <label class="form-label">City</label>
                    <input class="form-control" type="text" name="city" placeholder="City">
                </div>
            </div>
            <div class="buttons d-flex justify-content-between mt-3">
            <div class="form-group">
                    <label class="form-label">Poste</label>
                    <input class="form-control" type="text" name="poste" placeholder="Poste">
                </div>
                <input type="submit" class="btn btn-primary mt-5" value="find">
            </div>
        </form>
    </div>


    <div class="players-list my-5 bg-light rounded">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Player</th>
                    <th>status</th>
                    <th>age</th>
                    <th>view</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users->dataList as $user) : ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <?php if ($user['status'] == 0) :?>
                            <p class="fw-normal mb-1 dash-banned">
                                Banned
                            </p>
                        <?php elseif ($user['status'] == 1) : ?>
                            <p class="fw-normal mb-1 dash-dtatus">
                                Active
                            </p>
                        <?php endif; ?>
                    </td>
                    <td>
                        <p class="fw-normal mb-1 text-center">
                            <?php echo $user['age']; ?>
                        </p>
                    </td>
                    <td>
                        <a class="text-dark text-decoration-none" href="/playerDetails<?php echo '?id=' . $user['id'];?>">profile</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
</div> -->