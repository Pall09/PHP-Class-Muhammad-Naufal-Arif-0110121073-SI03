<h4 class="text">Form Nilai Ujian</h4>
<hr>
<div class="container">
    <form method="POST" action="nilai-mhs.php">
        <div class="input-group mt-4 row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="nim" name="nim" placeholder="NIM" type="number" class="form-control" required="required">
            </div>
        </div>
        <div class="input-group mt-3 row">
            <label for="Mata Kuliah" class="col-4 col-form-label">Pilih MK</label>
            <div class="col-8">
                <select id="matkul" name="matkul" class="form-select">
                    <option value="Basis Data">Basis Data</option>
                    <option value="Pemograman Web">Pemograman Web</option>
                    <option value="UI/UX">UI/UX</option>
                    <option value="Desain Grafis">Desain Grafis</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                </select>
            </div>
        </div>
        <div class="input-group mt-3 row">
            <label for="nilai" class="col-4 col-form-label">Nilai</label>
            <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Nilai" type="number" class="form-control"
                    required="required">
            </div>
        </div>
        <div class="input-group mt-3 mb-5 row">
            <div class="offset-4 col-8">
                <button id="proses" name="proses" type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
</div>