<div class="container my-3">
	<div class="row">
		<div class="col-md-12">
			<!-- Mengecek apakah sudah masuk data dari controller dan model -->
			<!-- <?php print_r($listbuku); ?> -->
			<div class="card">
				<div class="card-header">
					Daftar Buku
				</div>
				<div class="card-body">
					<!-- Membuat pencarian buku -->
					<div class="input-group mb-3">
						<form action="Welcome" method="GET">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Keyword" name="keyword" placeholder="Masukkan nama buku" aria-describedby="button-addon2">
								<button class="btn btn-outline-secondary" type="submit">Cari</button>
							</div>
						</form>
					</div>
					<!-- Membuat tabel buku -->
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<tr>
								<th>ID Buku</th>
								<th>Kategori</th>
								<th>Nama Buku</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Penerbit</th>
                                <th>Status</th>
							</tr>
							<!-- Jika ada keyword -->
							<?php if (isset($_GET['keyword'])) { ?>
								<p>Menampilkan data dengan kata kunci <strong><?php echo $_GET['keyword'] ?></strong></p>
								<?php foreach ($listkeyword as $b) { ?>
									<tr>
										<td><?php echo $b->id_buku; ?></td>
										<td><?php echo $b->kategori; ?></td>
										<td><?php echo $b->nama_buku; ?></td>
										<td><?php echo $b->harga; ?></td>
										<td><?php echo $b->stok; ?></td>
										<td><?php echo $b->penerbit; ?></td>
									<?php } ?>
						</table>
					</div>
				<?php } else { ?>
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
						<?php } ?>
						</table>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>
</div>