<?php
 include "koneksi.php";
 $id=$_GET['id'];
 
 $query=mysqli_query($mysql, "SELECT * FROM mahasiswa WHERE id='$id'") or die(mysqli_error($koneksi));
 $data=mysqli_fetch_array($query);
?>
    <form id="form_edit" method="post">

        <input type="hidden" name="id" id="id" required="" value="<?php echo $data['id']; ?>" />

        <label>NIM </label>
        <input type="number" name="nim" value="<?php echo $data['nim'];?>"><br>

        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br>

        <label>Prodi</label>
        <input type="text" name="prodi" value="<?php echo $data['prodi'];?>"><br>
        
        <label>Prodi</label>
        <input type="text" name="angkatan" value="<?php echo $data['angkatan'];?>"><br>
        
        
        <input type="submit" value="ubah" id="simpanFile">
        <button type="button" id="cancel">Batal</button>
    </form>