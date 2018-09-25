<?php include("./global/header.php"); ?>
<?php

$emailUser = $_SESSION['login_email'];
$passUser = $_SESSION['login_pass'];

?>


    <section class=" text-center card card-lg container-fluid" id="about-about">
        <h1 class="text-xxxl m-b-sm m-t-sm text-xxs-center" style="color: #7ec80d;">- Manage Account -</h1>

        <h4 class="d-inline-block"> Your Email: <?php echo $emailUser; ?> </h4>
        <h4> Your Password: <?php echo $passUser; ?> </h4>
    </section>


<?php include "./global/footer.php"; ?>