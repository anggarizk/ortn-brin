<?= $this->extend('layouts/material') ?>

<?= $this->section('content') ?>
  <div class="row mt-4">
        <div class="col-lg-12 col-md-12">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Detail Pegawai</h6>
                  </div>
                </div>
                <div class="card-body">
                    <form class="row" id="form-pegawai">
                      <div class="col-12 col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Nomor Induk Pegawai</label>
                          <input type="text" class="form-control" id="nip" value="<?= $data->nip ?>">
                          <input type="hidden" class="form-control" id="id" value="">
                        </div>
                        <div class="input-group input-group-static mb-4">
                          <label>Nama Pegawai</label>
                          <input type="text" class="form-control" id="name" value="<?= $data->nama ?>">
                        </div>
                        <div class="input-group input-group-static mb-4">
                          <label>Jabatan</label>
                          <select class="form-control" id="jabatan">
                            <option>-</option>
                            <?php foreach($listJabatan->getResult() as $jab): ?>
                            <option <?= $jab->id == $data->jabatan ? 'selected' : '' ?> value="<?= $jab->id ?>"><?= $jab->deskripsi ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Golongan</label>
                          <select class="form-control" id="golongan">
                            <option>-</option>
                            <?php foreach($listGolongan->getResult() as $gol): ?>
                            <option <?= $gol->id == $data->golongan ? 'selected' : '' ?> value="<?= $gol->id ?>"><?= $gol->deskripsi ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="input-group input-group-static mb-4">
                          <label>Nomor Pokok Wajib Pajak</label>
                          <input type="text" class="form-control" id="npwp" value="<?= $data->npwp ?>">
                        </div>
                        <div class="input-group input-group-static mb-4">
                          <label>Nomor Rekening</label>
                          <input type="text" class="form-control" id="norek" value="<?= $data->norek ?>">
                        </div>
                      </div>
                    </form>
                    <button type="button" id="btn-save" class="btn btn-success" style="display: none;">Simpan</button>
                    <button onclick="cancel()" type="button" id="btn-cancel" class="btn btn-warning" style="display: none;">Batal</button>
                    <button onclick="update()" type="button" id="btn-edit" class="btn btn-info" style="display: none;">Ubah Data Pegawai</button>
                    <button type="button" id="btn-delete" class="btn btn-danger" style="display: none;">Hapus Data Pegawai</button>
                </div>
            </div>
        </div>
    </div>  
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  var mode = '<?= $mode ?>';

  $(document).ready(function()
  {
    if(mode == "Read")
    {
      $("#btn-edit, #btn-delete").show();
      $("#form-pegawai input, #form-pegawai select").prop("disabled", true);
    }
  });

  function update()
  {
    $("#form-pegawai input, #form-pegawai select").prop("disabled", false);
    $("#btn-edit, #btn-delete").hide();
    $("#btn-save, #btn-cancel").show()
  }

  function save()
  {
    
  }

  function cancel()
  {
    Swal.fire(
    {
      title: 'Konfirmasi Pembatalan',
      text: 'Anda yakin akan membatalkan perubahan data pegawai?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Ya, batalkan',
      cancelButtonText: 'Lanjut ubah data pegawai',
      customClass: {
          cancelButton: 'btn btn-lg btn-warning me-2',
          confirmButton: 'btn btn-lg btn-info me-2'
      },
      buttonsStyling: false
    }).then((result) => {
      if (result.isConfirmed) {
        $("#form-pegawai input, #form-pegawai select").prop("disabled", true);
        $("#btn-edit, #btn-delete").show();
        $("#btn-save, #btn-cancel").hide();
      };
    });
  }
</script>
<?= $this->endSection() ?>
