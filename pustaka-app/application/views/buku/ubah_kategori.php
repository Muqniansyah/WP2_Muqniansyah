<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama Kategori tidak boleh kosong</div>');
                redirect('buku/ubahKategori/'. $kategori['id_kategori']);
            } ?>
            <form action="<?= base_url('buku/ubahKategori'); ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id_kategori" id="id_kategori" value="<?php echo $kategori['id_kategori']; ?>">
                    <input type="text" class="form-control form-control-user" id="kategori" name="kategori" placeholder="Masukkan Kategori Buku" value="<?= $kategori['nama_kategori']; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
