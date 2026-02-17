<div class="card mx-auto" style="width:70em">
    <div class="card-body">
<h1>Stok Material</h1>

<a href ="?hal=tambah_material" class="btn btn-primary">+ Material Baru</a>
    <table class="table table-hover">
        <tr>
            <td width="10%">NO</td>
            <td width="25%">NAMA MATERIAL</td>
            <td width="20%">JENIS</td>
            <td width="10%">STOK</td>
            <td width="15%">SATUAN</td>
            <td width="20%">ACTION</td>
        </tr>
        <?php
        include "koneksi.php";
        $no =1;
        $data = mysqli_query($koneksi, "SELECT * FROM material");
        while($row=mysqli_fetch_array($data)){

            echo "
            <tr>
                <td>".$no++."</td>
                <td>".$row['nama']."</td>
                <td>".$row['jenis']."</td>
                <td>".$row['stok']."</td>
                <td>".$row['satuan']."</td>
                <td>
                        <a href='?hal=edit&id=".$row['id_material']."' class='btn btn-success'>EDIT</a>
                        <a href='?hal=hapus&id=".$row['id_material']."' class='btn btn-danger'>HAPUS</a>
                </td>
            </tr> 
            ";
        }
        ?>
    </table>
    </div>
    </div>