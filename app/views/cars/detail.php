<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['crs']['name']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['crs']['price']; ?></h6>
            <p class="card-text"><?= $data['crs']['power']; ?></p>
            <p class="card-text"><?= $data['crs']['torque']; ?></p>
            <p class="card-text"><?= $data['crs']['topspeed']; ?></p>
            <a href="<?= BASEURL;?>/cars/index" class="card-link">Back</a>
        </div>
    </div>

</div>