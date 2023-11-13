<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['usr']['username']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['usr']['ID_user']; ?></h6>
            <p class="card-text"><?= $data['usr']['email']; ?></p>
            <p class="card-text"><?= $data['usr']['password']; ?></p>
            <a href="<?= BASEURL; ?>/Lp" class="card-link">Back</a>
        </div>
    </div>
</div>