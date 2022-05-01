<div class="container my-3">
    <!-- cek apakah data sudah terkoneksi dengan database -->
    <!-- <?php print_r($listbuku); ?> -->
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
                            <form action="<?= base_url('/admin/update_buku/' . $listbuku['id_buku']) ?>" method="POST" enctype="multipart/form-data">
                                <label for="id_buku">ID Buku:</label>
                                <input type="text" name="id_buku" id="id_buku" class="form-control" value="<?= $listbuku['id_buku'] ?>">
                                <label for="kategori">Kategori:</label>
                                <input type="text" name="kategori" id="kategori" class="form-control" value="<?= $listbuku['kategori'] ?>">
                                <label for="nama_buku">Nama Buku:</label>
                                <input type="text" name="nama_buku" id="nama_buku" class="form-control" value="<?= $listbuku['nama_buku'] ?>">
                                <label for="harga">Harga:</label>
                                <input type="number" name="harga" id="harga" class="form-control" value="<?= $listbuku['harga'] ?>">
                                <label for="stok">Stok:</label>
                                <input type="number" name="stok" id="stok" class="form-control" value="<?= $listbuku['stok'] ?>">
                                <label for="penerbit">Penerbit:</label>
                                <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $listbuku['penerbit'] ?>">
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>