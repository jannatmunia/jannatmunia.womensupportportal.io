<?php
include("raw/connect.php");

if (isset($_GET['searchbtn'])) {
    $input = mysqli_real_escape_string($conn, $_GET['searchinput']);
    $in= strtoupper($input);
    $sqlcareer = "Select * from career WHERE tips LIKE  '%$in%'";
}
else{
    $sqlcareer = "Select * from career ";
}
if(isset($_GET['resetbtn'])){
    header("location: education.php");
}



$find = $conn->query($sqlcareer);

//Original code
/*while($res = $find->fetch_assoc()){
echo $res["school"];
echo $res["phone"];
}*/
//Original code
?>

<?php include 'global/header.php' ?>


<div class="container">

    <div class="col-md-6">
        <h2>Women's Career</h2>
    </div>
    <div class="col-md-6">
        <div class="search-container"  style="float: right">
            <form method="get" action="career.php">
                <input class="form-control"  type="text" placeholder="Search Area" name="searchinput" >
                <div style="margin-top: 5px;">
                    <button class="btn btn-default"  style="float: right" name="searchbtn"  type="submit" style="border: greenyellow"> <i class="fa fa-search" ></i></button>
                    <button class="btn btn-default" name="resetbtn"  type="submit" style="border-color: red"> Reset</button>
                </div>

            </form>
        </div>
    </div>


    <div class="gridwraper text-center center-block">
        <div class="row col-md-12  mygrid">
            <div class="container gridpad">

                <?php while ($res = $find->fetch_assoc()) { ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 img1">
                        <img src="assets/images/women.png" alt="">
                        <h1><?php echo $res["tips"]; ?></h1>
                        <p style="color: coral">
                            <?php echo "Phone: " . $res["phone"]; ?>
                        </p>
						
						 <p style="color: coral">
                            <?php echo "tips: " . $res["tips"]; ?>
                        </p>
						 <p style="color: coral">
                            <?php echo "address: " . $res["address"]; ?>
                        </p>
                    </div>

                <?php } ?>


            </div>
        </div>
    </div>

</div>


<?php include 'global/footer.php' ?>