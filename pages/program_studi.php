<?php
includeHeader();
?>
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=program_studi_aksi">
            <fieldset>
                <legend>Program Studi</legend>
                <div class="form-group">
                    <label for="program_studi_id">Program Studi ID</label>
                    <input type="text" class="form-control" id="program_studi_id" name="program_studi_id" placeholder="Program Studi ID">
                    <label for="nama_program">Nama Program</label>
                    <input type="text" class="form-control" id="nama_program" name="nama_program" placeholder="Nama Program">
                    <label for="jenjang_program">Jenjang Program</label>
                    <input type="text" class="form-control" id="jenjang_program" name="jenjang_program" placeholder="Jenjang Program">
                    <label for="nama_kepala_program">Nama Kepala Program</label>
                    <input type="text" class="form-control" id="nama_kepala_program" name="nama_kepala_program" placeholder="Nama Kepala Program">
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