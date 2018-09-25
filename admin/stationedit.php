<?php
include("header.php");
include("./../raw/connect.php");
$id= $_GET['id'];

?>

<?php 
if(isset($_POST['update'])){

    $station= $_POST['station'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];

    $upsql= "UPDATE safety SET station='$station',phone='$phone', address='$address' WHERE id=$id";
    mysqli_query($conn, $upsql);


    header("location: index.php");
}


?>


<?php 
$id= $_GET['id'];
$sqlSafety= "SELECT * from safety where id= $id";
$result = mysqli_query($conn, $sqlSafety);
while($res = mysqli_fetch_array($result))
{
    $station = $res['station'];
    $phone = $res['phone'];
    $address= $res['address'];
}

?>



<style>

.form-control{
    width:50%;
    float:middle;
}
.mine{
    margin-bottom:20px;
}
</style>

<div class="container mine">
<form method="post" action="">
  <div class="form-group mx-sm-3 mb-2">
    <label for="station" class="sr-only">Police Station</label>
    <input type="text" class="form-control" id="station" name="station" value="<?php echo $station ?>" />
  </div>
  
  <div class="form-group mx-sm-3 mb-2">
    <label for="phone" class="sr-only">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>" />
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <label for="address" class="sr-only">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>" />
  </div>
  <button type="submit" name="update" class="btn btn-primary mb-2">Update</button>
</form>

</div>



    <script type="text/javascript"  src="./../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./../assets/js/jquery-1.12.0.min.js"></script>
<?php include "footer.php"; ?>