<?php 
require("controllerofficeemplo.php");
require("controlleremployee.php");
require("controlleroffice.php");
require("viewnav.php");
if(isset($_POST['submit'])){
    insertofficeemplo();
}
if(isset($_GET['delete'])){
    deleteofficeemplo($_GET['delete']);
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1 class="text-center">List Office-Employee</h1>
<table class="table mt-2 w-50 mx-auto text-center">
    <thead class="table-primary">
    <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Usia</th>
            <th scope="col">Nama Kantor</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">Nomor Kontak</th>
            <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        $num=1;
        foreach(indexofficeemplo() as $index => $officeemplo){
            echo"
            <tr>
                <td>".$num."</td>
                <td>".$_SESSION['listkaryawan'][$officeemplo -> idnama] -> nama."</td>
                <td>".$_SESSION['listkaryawan'][$officeemplo -> idnama] -> jabatan."</td>
                <td>".$_SESSION['listkaryawan'][$officeemplo -> idnama] -> usia."</td>
                <td>".$_SESSION['listoffice'][$officeemplo -> idnamaoffice] -> namaoffice."</td>
                <td>".$_SESSION['listoffice'][$officeemplo -> idnamaoffice] -> alamat."</td>
                <td>".$_SESSION['listoffice'][$officeemplo -> idnamaoffice] -> kota."</td>
                <td>".$_SESSION['listoffice'][$officeemplo -> idnamaoffice] -> nohp."</td>
                <td><a href='viewofficeemplo.php?delete=".$index."'><button class='btn btn-outline-info'>Delete</td>
            </tr>
            ";
            $num++;
        }
        ?>
    </tbody>
</table>
<?php
if(isset($_GET['edit'])){
?>
<h1 class="text-center mt-4">Form Office-Employee</h1>

        <form method="POST" action="viewofficeemplo.php">
        <div class="text-center">
        <select class="w-1 form-select form-select-lg mb-3 text-start" name="idnama" id="color" required>
                    <option value=""> ---> Choose an Employee <--- </option><?php 
                     foreach(indexkar() as $index=>$karyawan){
                      echo"
                      <option value=".$index.">".$karyawan -> nama."</option>"
                     ;}
        ?>
                </select>
                <select class="w-1 form-select form-select-lg mb-3 text-start" name="idnamaoffice" id="color" required>
                    <option value=""> ---> Choose an Office <--- </option><?php 
                     foreach(indexoffice() as $index=>$office){
                      echo"
                      <option value=".$index.">".$office -> namaoffice."</option>"
                    ;}
        ?>
                </select>
                     </div>
            <button name="submit" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Submit</button>
        </form>

</body>
</html>