<div class="row row-xs">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <?= form_open_multipart('data/student/save_excel') ?>
                <div
                    class="alert alert-warning align-items-center <?= $hide = ($this->session->flashdata('create_info_message')) ? '' : 'd-none' ?>">
                    <i data-feather="alert-circle"
                        class="mg-r-10"></i><?= $this->session->flashdata('create_info_message');  ?>
                </div>
                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Pilih file Excel</label>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?= base_url('data/student') ?>" class="btn btn-sm btn-danger" type="button" name="">Batal</a>
                <button class="btn btn-sm btn-primary float-right" type="submit" name="">Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>