<?= $this->extend('layouts/material') ?>

<?= $this->section('content') ?>
    <div class="row mt-4">
        <div class="col-lg-12 col-md-12">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Daftar Pegawai</h6>
                    </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama/NIP</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan/Golongan</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NPWP</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No. Rek</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($data['pegawai'] as $d): ?>
                        <tr>
                          <td>
                            <div class="d-flex flex-column justify-content-center px-3">
                              <h6 class="mb-0 text-sm"><?= esc($d->nama) ?></h6>
                              <p class="text-xs text-secondary mb-0"><?= esc($d->nip) ?></p>
                            </div>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0"><?= $d->jabatan ?></p>
                            <p class="text-xs text-secondary mb-0"><?= $d->golongan ?></p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0"><?= $d->npwp ?></p>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?= $d->norek ?></span>
                          </td>
                          <td class="align-middle">
                            <a href="<?= base_url('pegawai/view/' . $d->id) ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                              DETAIL
                            </a>
                          </td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                    <?= $data['pager']->links('group1', 'material_pager') ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="../assets/js/plugins/sweetalert.min.js"></script>
<?= $this->endSection() ?>
