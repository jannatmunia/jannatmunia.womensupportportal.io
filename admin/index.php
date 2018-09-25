<?php include("header.php") ?>

    <div class="container">
    <div class="container body-content">


        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }

            th {
                text-align: center;
            }

            td {
                text-align: center;
            }
        </style>


        <div class="col-md-6">
            <h2>Police Stations</h2>
            <table>
                <tr>
                    <th>Index</th>
                    <th>Station</th>
                </tr>

                <!--Table data-->
                <?php
                $count = 1;
                while ($res = $findSafety->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <h4><?php echo $count; ?></h4>
                        </td>
                        <td>
                            <a href="stationedit.php?id= <?php echo $res['id'] ?>">
                                <h4 style="margin-left: 10px"><?php echo $res["station"]; ?></h4>
                            </a>
                        </td>
                    </tr>
                    <?php
                    $count++;
                } ?>
                <!--Table data-->
            </table>
        </div>

        <div class="col-md-6 vl">
            <h2>Tips</h2>

            <table>
                <tr>
                    <th>Index</th>
                    <th>Tips</th>
                </tr>
                <!--Table data-->
                <?php
                $count = 1;
                while ($res = $findHealth->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <h4><?php echo $count; ?></h4>
                        </td>
                        <td>
                            <a href="tipsedit.php?id= <?php echo $res['id'] ?>">
                                <h4 style="margin-left: 10px"><?php echo $res["title"]; ?></h4>
                            </a>
                        </td>
                    </tr>
                    <?php
                    $count++;
                } ?>
                <!--Table data-->
            </table>

        </div>
    </div>

<?php include("footer.php") ?>