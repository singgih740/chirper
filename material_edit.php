<?php

include "koneksi.php";

$terserah = $_GET['id'];

$terserah_query = mysqli_query($koneksi, "SELECT * FROM material WHERE id_material='$terserah' ");

$row = mysqli_fetch_array($terserah_query);
echo '
    <div class="card mx-auto" style="width:30em">
        <div class="card-body">
            <form action="material_update.php" method="post">
                <label class="form-label mb-3" for="">Nama Material</label>
                    <input value="'.$row['nama'].'" class="form-control mb-3" type="text" name="nama" id="nama">
                <label class="form-label" for="">Janis</label>
                    <select class="form-select" name="jenis" id="jenis">
                        <option value="'.$row['jenis'].'">'.$row['jenis'].'</option>
                        <option value="0">- Pilih jenis -</option>
                        <option value="listrik">Listrik</option>
                        <option value="mesin">Mesin</option>
                        <option value="sipil">Sipil</option>
                    </select>
                <label class="form-label mb-3" for="">Jumlah</label>
                    <input value="'.$row['stok'].'" class="form-control mb-3"type="number" name="stok" id="stok">
                <label class="form-label mb-3" for="">Satuan</label>
                    <input value="'.$row['satuan'].'" class="form-control mb-3"type="text" name="satuan" id="satuan">
                    <input value="'.$row['id_material'].'" class="form-control mb-3" type="hidden" name="id_material" id="id_material">
                <input class="btn btn-success mb-3"type="submit" value="Simpan">
</form>
</div>
</div>
';
?>

