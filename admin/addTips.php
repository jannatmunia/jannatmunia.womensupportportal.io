<?php
include("header.php");
include("./../raw/connect.php");
?>

<?php 
if(isset($_POST['addtips'])){

    $title= $_POST['title'];
    $tips= $_POST['tips'];

    $sqlTip= "INSERT INTO health(title,tips) VALUES('$title','$tips')";
    mysqli_query($conn, $sqlTip);
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
  Title:
    <label for="title" class="sr-only">Title</label>
    <input type="text" class="form-control" id="title" name="title"/>
  </div>
  Tip:
  <div class="form-group mx-sm-3 mb-2">
    <label for="tips" class="sr-only">Tip</label>
    <input type="text" class="form-control" id="tips" name="tips"/>
  </div>

  <button type="submit" name="addtips" class="btn btn-primary mb-2">Add Tip</button>
</form>

</div>

    <script type="text/javascript"  src="./../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./../assets/js/jquery-1.12.0.min.js"></script>
<?php include "footer.php"; ?>