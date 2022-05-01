<div class="container my-3">
    <?php if ($this->session->flashdata('pesan') != '') { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header">Tambah Buku:</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <form action="<?= base_url('/admin/update_penerbit/' . $listpenerbit['id_penerbit']) ?>" method="POST" enctype="multipart/form-data">
                                <label for="id_penerbit">ID Penerbit:</label>
                                <input type="text" name="id_penerbit" id="id_penerbit" class="form-control" value="<?= $listpenerbit['id_penerbit'] ?>">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $listpenerbit['nama'] ?>">
                                <label for=" alamat">Alamat:</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $listpenerbit['alamat'] ?>">
                                <label for=" kota">Kota:</label>
                                <input type="text" name="kota" id="kota" class="form-control" value="<?= $listpenerbit['kota'] ?>">
                                <label for=" telepon">Telepon:</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" value="<?= $listpenerbit['telepon'] ?>">
                                <label for=" email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?= $listpenerbit['email'] ?>">
                                <button type=" submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>