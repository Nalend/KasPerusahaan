<?php
includeHeader();
?>
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=dosen_tambah_aksi">
            <fieldset>
                <legend>Tambah Dosen</legend>
                <div class="form-group">
                    <label for="dosen_id">Dosen ID</label>
                    <input type="text" class="form-control" id="dosen_id" name="dosen_id" placeholder="Dosen ID">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Nama Dosen">
                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                    <select class="custom-select" name="pendidikan_terakhir" id="pendidikan_terakhir" required>
                        <option value="0">D3</option>
                        <option value="1">S1</<option>
                        <option value="2">S2</option>
                        <option value="3">S3</<option>
                        </select>
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    <label for="no_hp">No Handphone</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone">
                    <label for="dosen_pa">Dosen PA</label>
                    <select class="custom-select" name="dosen_pa" id="dosen_pa" required>
                        <option value="Y">Ya</option>
                        <option value="N">Tidak</<option>
                        </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn-warning">Reset</button>
        </fieldset>
    </form>
    </div>
    </div>
<?php
includeFooter();

                    