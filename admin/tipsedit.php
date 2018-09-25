<?php
include("header.php");
include("./../raw/connect.php");
$id= $_GET['id'];

?>

<?php 
if(isset($_POST['update'])){

    $title= $_POST['title'];
    $tips= $_POST['tips'];

    $upsql= "UPDATE health SET title='$title',tips='$tips' WHERE id=$id";
    mysqli_query($conn, $upsql);
    header("location: index.php");
}


?>


<?php 
$id= $_GET['id'];
$sqlSafety= "SELECT * from health where id= $id";
$result = mysqli_query($conn, $sqlSafety);
while($res = mysqli_fetch_array($result))
{
    $title = $res['title'];
    $tips = $res['tips'];
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
    <label for="title" class="sr-only">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title ?>" />
  </div>
  
  <div class="form-group mx-sm-3 mb-2">
    <label for="tips" class="sr-only">Tips</label>
    <input type="text" class="form-control" id="tips" name="tips" value="<?php echo $tips ?>" />
  </div>

  <button type="submit" name="update" class="btn btn-primary mb-2">Update</button>
</form>

</div>



    <script type="text/javascript"  src="./../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./../assets/js/jquery-1.12.0.min.js"></script>
<?php include "footer.php"; ?>