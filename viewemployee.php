<?php 

require("controlleremployee.php");
require("viewnav.php");
if(isset($_POST['submit'])){
    insertkar();
}
if(isset($_GET['delete'])){
    deletekar($_GET['delete']);
}
if(isset($_POST['submitedit'])){
    editkar($_POST['update']);
}

?>
<body>
    <h1 class="text-center">List Employee</h1>
<table class="table mt-2 w-50 mx-auto text-center">
    <thead class="table-primary">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Usia</th>
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        $num=1;
        foreach(indexkar() as $indexkar=>$karyawan){
            echo"
            <tr>
                <td>".$num."</td>
                <td>".$karyawan->nama."</td>
                <td>".$karyawan->jabatan."</td>
                <td>".$karyawan->usia."</td>
                <td><a href='viewemployee.php?delete=".$indexkar."'><button class='btn btn-outline-info'>Delete</button></a></td>
                <td><a href='viewemployee.php?edit=".$indexkar."'><button class='btn btn-outline-info'>Delete</button></a></td>
            </tr> 
            ";
            $num++;
        }
        
        ?>
    </tbody>
</table>
<?php if(isset($_GET['edit'])) {?>
<h1 class="text-center mt-4">Edit Employee</h1>

        <form method="POST" class="mt-2 w-50 mx-auto" action="viewemployee.php">
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="Nama" aria-describedby="Nama" value="<?php
                foreach(indexkar() as $indexkar=>$karyawan){
                if ($indexkar == $_GET['edit'])
                echo"$karyawan->nama";
                
            }
            ?>">
            </div>
            <div class="form-group">
                <label for="Jabatan">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="Jabatan"  value="<?php
                foreach(indexkar() as $indexkar=>$karyawan){
                if ($indexkar == $_GET['edit'])
                echo"$karyawan->jabatan";
            }
            ?>">
            </div>
            <div class="form-group">
                <label for="Usia">Usia</label>
                <input type="number" name="usia" class="form-control" id="Usia" value="<?php
                foreach(indexkar() as $indexkar=>$karyawan){
                    if ($indexkar == $_GET['edit']) {
                        echo "$karyawan->usia";
                    }
                }
                ?>">
                <div><input name="update" type="hidden" value="<?= $_GET['edit'] ?>"></div>
            </div>
            <button name="submitedit" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Submit</button>
        </form>
<?php }else{ ?>
    <h1 class="text-center mt-4">Form Employee</h1>

<form method="POST" class="mt-2 w-50 mx-auto" action="viewemployee.php">
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="Nama" aria-describedby="Nama" placeholder="Masukkan Nama">
    </div>
    <div class="form-group">
        <label for="Jabatan">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" id="Jabatan"  placeholder="Masukkan Jabatan">
    </div>
    <div class="form-group">
        <label for="Usia">Usia</label>
        <input type="number" name="usia" class="form-control" id="Usia" placeholder="Masukkan Usia">
    </div>
    <button name="submit" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Submit</button>
</form>
    <?php
}
    ?>
</body>
</html>