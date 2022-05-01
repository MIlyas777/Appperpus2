<!-- Mengecek apakah sudah masuk data buku dari controller dan model -->
<!-- <?php print_r($listbuku); ?> -->
<!-- Mengecek apakah sudah masuk data penerbit dari controller dan model -->
<!-- <?php print_r($listpenerbit); ?> -->
<div class="container my-3">
    <?php if ($this->session->flashdata('pesan') != '') { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Daftar Buku</h5>
                </div>
                <div class="card-body">
                    <!-- menambah tombol tambah buku -->
                    <strong>Tambah Buku</strong><br>
                    <a href="Admin/add_buku" class="btn btn-success">Tambah Buku</a>
                    <!-- Membuat tabel buku -->
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>Nama Buku</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Penerbit</th>
                                <th>Aksi</th>
                            </tr>
                            <!-- Menampilkan array $listbuku -->
                            <?php
                            foreach ($listbuku as $b) { ?>
                                <tr>
                                    <td><?php echo $b->id_buku; ?></td>
                                    <td><?php echo $b->kategori; ?></td>
                                    <td><?php echo $b->nama_buku; ?></td>
                                    <td><?php echo $b->harga; ?></td>
                                    <td><?php echo $b->stok; ?></td>
                                    <td><?php echo $b->penerbit; ?></td>
                                    <td>
                                        <a href="Admin/edit_buku/<?php echo $b->id_buku; ?>" class="btn btn-warning ml-1 mt-1">Edit</a>
                                        <a href="Admin/delete_buku/<?php echo $b->id_buku; ?>" onclick="return confirm('Apakah Anda yakin menghapus buku ini?')" class="btn btn-danger ml-1 mt-1">Hapus</a>
                                    </td>
                                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Daftar Penerbit</h5>
                </div>
                <div class="card-body">
                    <!-- menambah tombol tambah penerbit -->
                    <strong>Tambah Penerbit</strong><br>
                    <a href="Admin/add_penerbit" class="btn btn-success">Tambah Penerbit</a>
                    <!-- Membuat tabel penerbit -->
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>ID Penerbit</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                            <!-- Menampilkan array $listpenerbit -->
                            <?php
                            foreach ($listpenerbit as $p) { ?>
                                <tr>
                                    <td><?php echo $p->id_penerbit; ?></td>
                                    <td><?php echo $p->nama; ?></td>
                                    <td><?php echo $p->alamat; ?></td>
                                    <td><?php echo $p->kota; ?></td>
                                    <td><?php echo $p->telepon; ?></td>
                                    <td><?php echo $p->email; ?></td>
                                    <td>
                                        <a href="Admin/edit_penerbit/<?php echo $p->id_penerbit; ?>" class="btn btn-warning ml-1 mt-1">Edit</a>
                                        <a href="Admin/delete_penerbit/<?php echo $p->id_penerbit; ?>" onclick="return confirm('Apakah Anda yakin menghapus penerbit ini?')" class="btn btn-danger ml-1 mt-1">Hapus</a>
                                    </td>
                                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>