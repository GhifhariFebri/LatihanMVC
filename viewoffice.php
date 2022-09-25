<?php 

require("controlleroffice.php");
require("viewnav.php");
if(isset($_POST['submit'])){
    insertoffice();
}
if(isset($_GET['delete'])){
    deleteoffice($_GET['delete']);
}
if(isset($_POST['submitedit'])){
    editoffice($_POST['update']);
}

?>
<body>
    <h1 class="text-center">List Office</h1>
<table class="table mt-2 w-50 mx-auto text-center">
    <thead class="table-primary">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kantor</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kota</th>
        <th scope="col">Nomor Kontak</th>
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        $num=1;
        foreach(indexoffice() as $indexoffice=>$office){
            echo"
            <tr>
                <td>".$num."</td>
                <td>".$office->namaoffice."</td>
                <td>".$office->alamat."</td>
                <td>".$office->kota."</td>
                <td>".$office->nohp."</td>
                <td><a href='viewoffice.php?delete=".$indexoffice."'><button class='btn btn-outline-info'>Delete</button></a></td>
                <td><a href='viewoffice.php?edit=".$indexoffice."'><button class='btn btn-outline-info'>Edit</button></a></td>
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
<h1 class="text-center mt-4">Form Office</h1>

        <form method="POST" class="mt-2 w-50 mx-auto" action="viewoffice.php">
            <div class="form-group">
                <label for="Nama">Nama Kantor</label>
                <input type="text" name="namaoffice" class="form-control" id="Nama" aria-describedby="Nama" value="<?php
                foreach(indexoffice() as $indexoffice=>$office){
                if ($indexoffice == $_GET['edit'])
                echo"$office->namaoffice";
            }
            ?>">
            </div>
            <div class="form-group">
                <label for="Jabatan">Nama Alamat Kantor</label>
                <input type="text" name="alamat" class="form-control" id="Jabatan"  value="<?php
                foreach(indexoffice() as $indexoffice=>$office){
                if ($indexoffice == $_GET['edit'])
                echo"$office->alamat";
            }
            ?>">
            </div>
            <div class="form-group">
                <label for="Usia">Nama Kota Kantor</label>
                <input type="text" name="kota" class="form-control" id="Usia" value="<?php
                foreach(indexoffice() as $indexoffice=>$office){
                if ($indexoffice == $_GET['edit'])
                echo"$office->kota";
            }
            ?>">
            </div>
            <div class="form-group">
                <label for="Usia">Nomor Kontak Kantor</label>
                <input type="number" name="nohp" class="form-control" id="Usia" value="<?php
                foreach(indexoffice() as $indexoffice=>$office){
                if ($indexoffice == $_GET['edit'])
                echo"$office->nohp";
            }
            ?>">
            </div>
            <div><input name="update" type="hidden" value="<?= $_GET['edit'] ?>"></div>
        </div>
            <button name="submitedit" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Submit</button>
        </form>
<?php
}else{
?>
<h1 class="text-center mt-4">Form Office</h1>

<form method="POST" class="mt-2 w-50 mx-auto" action="viewoffice.php">
    <div class="form-group">
        <label for="Nama">Nama Kantor</label>
        <input type="text" name="namaoffice" class="form-control" id="Nama" aria-describedby="Nama" placeholder="Masukkan Nama Kantor">
    </div>
    <div class="form-group">
        <label for="Jabatan">Nama Alamat Kantor</label>
        <input type="text" name="alamat" class="form-control" id="Jabatan"  placeholder="Masukkan Alamat">
    </div>
    <div class="form-group">
        <label for="Usia">Nama Kota Kantor</label>
        <input type="text" name="kota" class="form-control" id="Usia" placeholder="Masukkan Kota Kantor">
    </div>
    <div class="form-group">
        <label for="Usia">Nomor Kontak Kantor</label>
        <input type="number" name="nohp" class="form-control" id="Usia" placeholder="Masukkan Kontak Kantor">
    </div>
</div>
    <button name="submit" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Submit</button>
</form>
<?php
}
?>
</body>
</html>