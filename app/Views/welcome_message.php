<?= $this->extend('layouts/material') ?>

<?= $this->section('content') ?>
    <div class="row mt-4">
        <div class="col-lg-12 col-md-12">
            <div class="card z-index-2 ">
                <div class="card-body">
                    <h6 class="mb-0 ">Website Views</h6>
                    <p class="text-sm ">Last Campaign Performance</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>