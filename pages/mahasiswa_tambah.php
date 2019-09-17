<?php
includeHeader();
?>
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=mahasiswa_tambah_aksi">
            <fieldset>
                <legend>Mahasiswa</legend>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    <label for="tahun_masuk">Tahun Masuk</label>
                    <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" placeholder="Tahun Masuk">
                    <label for="program_studi_id">Program Studi ID</label>
                    <input type="text" class="form-control" id="program_studi_id" name="program_studi_id" placeholder="Program Studi ID">
                    <label for="dosen_pa">Dosen PA</label>
                    <input type="text" class="form-control" id="dosen_pa" name="dosen_pa" placeholder="Dosen PA">
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
?>