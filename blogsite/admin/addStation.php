<?php
include("header.php");
include("./../raw/connect.php");
?>

<?php 
if(isset($_POST['update'])){

    $station= $_POST['station'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];

    mysqli_query($conn, "INSERT INTO safety(station,phone,address) VALUES('$station','$phone','$address')");
    header("location: index.php");
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
    <input type="text" class="form-control" id="station" name="station"/>
  </div>
  
  <div class="form-group mx-sm-3 mb-2">
    <label for="phone" class="sr-only">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone"/>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <label for="address" class="sr-only">Address</label>
    <input type="text" class="form-control" id="address" name="address"/>
  </div>
  <button type="submit" name="update" class="btn btn-primary mb-2">Add Station</button>
</form>

</div>

    <script type="text/javascript"  src="./../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./../assets/js/jquery-1.12.0.min.js"></script>
<?php include "footer.php"; ?>