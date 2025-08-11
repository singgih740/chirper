<div class="card mx-auto" style="width:30em">
    <div class="card-body">
        <form action="material_simpan.php" method="post">
            <label class="form-label mb-3" for="">Nama Material</label>
               <input class="form-control mb-3" type="text" name="nama" id="nama">
            <label class="form-label" for="">Jenis</label>
                <select class="form-select" name="jenis" id="jenis">
                    <option value="0">- Pilih Jenis -</option>
                    <option value="listrik">Listrik</option>
                    <option value="mesin">Mesin</option>
                    <option value="sipil">Sipil</option>
                </select>
            <label class="form-label mb-3" for="">Jumlah</label>
                <input class="form-control mb-3"type="number" name="stok" id="stok">
            <label class="form-label mb-3" for="">Satuan</label>
                <input class="form-control mb-3"type="text" name="satuan" id="satuan">
            <input class="btn btn-success mb-3"type="submit" value="Simpan">
        </form>
    </div>
</div>