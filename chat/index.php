<?php
include ("header.php");
?>

<link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="./../assets/css/style.css">
<link rel="stylesheet" type="text/css" href="./../assets/css/main1.css">
<link rel="stylesheet" type="text/css" href="./../assets/font-awesome-4.6.3/css/font-awesome.min.css">

<div class="container">
    <h1 class="text-xxxl m-b-sm m-t-sm text-xxs-center" style="color: yellowgreen;">Get Immediate Help</h1>
<form name="form1" class=" container-fluid">
Enter Your Chatname: <input class="form-control" type="text" name="uname" /> <br />
Your Message: <br />
<textarea class="form-control" rows="5" name="msg"></textarea><br />
<a href="#" onclick="submitChat()">Send</a><br /><br />
</form>

<div id="chatlogs">

</div>
</div>


<script
        src="http://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
</script>

<script>

    function submitChat() {
        if(form1.uname.value == '' || form1.msg.value == '') {
            alert("ALL FIELDS ARE MANDATORY!!!");
            return;
        }
        var uname = form1.uname.value;
        var msg = form1.msg.value;
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
        xmlhttp.send();

    }

    $(document).ready(function(e){
        $.ajaxSetup({
            cache: false
        });
        setInterval( function(){ $('#chatlogs').load('logs.php'); }, 2000 );
    });

</script>



<script src="./../assets/js/bootstrap.min.js"></script>
<script src="./../assets/js/jquery-1.12.0.min.js"></script>

<?php
include ("footer.php");
?>
