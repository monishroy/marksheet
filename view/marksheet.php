<?php

require_once '../dbcon.php';

$id = $_GET['user_id'];
$result = mysqli_query($con, "SELECT * FROM `marksheets` WHERE `id` = '$id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Student Marksheet</title>
    <!-- Favicon -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    
    <style>
        body{
            margin: 0;
        }
        .print-area{
        width: 760px;
        height: 1050px;
        margin: auto;
        box-sizing: border-box;
        page-break-after: always;
        }
        .data-info{
            margin-top: 50px;
        }
        .data-info table{
            width: 100%;
            border-collapse: collapse;
        }
        .data-info table th,
        .data-info table td{
            border: 1px solid #555;
            padding: 4px;
            line-height: 1em;
        }
    </style>

</head>
<!-- onload="window.print()" -->
<body >
    <?php 
        $total = mysqli_num_rows($result);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="print-area">
        
            <div class="data-info">
                <table>
                    <tr>
                        <th colspan="4">Student Marksheet <br><br>
                    <?= ucwords($row['name']) ?><br><br>
                    <?= $row['roll'] ?>
                
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <th>Mark</th>
                        <th>Grate</th>
                        <th>Point</th>
                    </tr>
                    <tr>
                        <td>Bangla</td>
                        <td><?= $row['bangla'] ?></td>
                        <td>
                            <?php
                            if ($row["bangla"] > 100 ) {
                                echo "Invalid";
                            } elseif ($row["bangla"] >= 80 && $row["bangla"] <= 100) {
                                echo "A+";
                            } elseif ($row["bangla"] >= 70 && $row["bangla"] <= 79) {
                                echo "A";
                            } elseif ($row["bangla"] >= 60 && $row["bangla"] <= 69)  {
                                echo "A-";
                            } elseif ($row["bangla"] >= 50 && $row["bangla"] <= 59)  {
                                echo "B";
                            } elseif ($row["bangla"] >= 40 && $row["bangla"] <= 49 ) {
                                echo "C";
                            } elseif ($row["bangla"] >= 33 && $row["bangla"] <= 39 ) {
                                echo "D";
                            }else {
                                echo "F";
                            } 
                            ?>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td><?= $row['english'] ?></td>
                        <td>
                            <?php
                            if ($row["english"] > 100 ) {
                                echo "Invalid";
                            } elseif ($row["english"] >= 80 && $row["english"] <= 100) {
                                echo "A+";
                            } elseif ($row["english"] >= 70 && $row["english"] <= 79) {
                                echo "A";
                            } elseif ($row["english"] >= 60 && $row["english"] <= 69)  {
                                echo "A-";
                            } elseif ($row["english"] >= 50 && $row["english"] <= 59)  {
                                echo "B";
                            } elseif ($row["english"] >= 40 && $row["english"] <= 49 ) {
                                echo "C";
                            } elseif ($row["english"] >= 33 && $row["english"] <= 39 ) {
                                echo "D";
                            }else {
                                echo "F";
                            } 
                            ?>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td><?= $row['math'] ?></td>
                        <td>
                            <?php
                            if ($row["math"] > 100 ) {
                                echo "Invalid";
                            } elseif ($row["math"] >= 80 && $row["math"] <= 100) {
                                echo "A+";
                            } elseif ($row["math"] >= 70 && $row["math"] <= 79) {
                                echo "A";
                            } elseif ($row["math"] >= 60 && $row["math"] <= 69)  {
                                echo "A-";
                            } elseif ($row["math"] >= 50 && $row["math"] <= 59)  {
                                echo "B";
                            } elseif ($row["math"] >= 40 && $row["math"] <= 49 ) {
                                echo "C";
                            } elseif ($row["math"] >= 33 && $row["math"] <= 39 ) {
                                echo "D";
                            }else {
                                echo "F";
                            } 
                            ?>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td><?= $row['physics'] ?></td>
                        <td>
                            <?php
                            if ($row["physics"] > 100 ) {
                                echo "Invalid";
                            } elseif ($row["physics"] >= 80 && $row["physics"] <= 100) {
                                echo "A+";
                            } elseif ($row["physics"] >= 70 && $row["physics"] <= 79) {
                                echo "A";
                            } elseif ($row["physics"] >= 60 && $row["physics"] <= 69)  {
                                echo "A-";
                            } elseif ($row["physics"] >= 50 && $row["physics"] <= 59)  {
                                echo "B";
                            } elseif ($row["physics"] >= 40 && $row["physics"] <= 49 ) {
                                echo "C";
                            } elseif ($row["physics"] >= 33 && $row["physics"] <= 39 ) {
                                echo "D";
                            }else {
                                echo "F";
                            } 
                            ?>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td><?= $row['chemistry'] ?></td>
                        <td>
                            <?php
                            if ($row["chemistry"] > 100 ) {
                                echo "Invalid";
                            } elseif ($row["chemistry"] >= 80 && $row["chemistry"] <= 100) {
                                echo "A+";
                            } elseif ($row["chemistry"] >= 70 && $row["chemistry"] <= 79) {
                                echo "A";
                            } elseif ($row["chemistry"] >= 60 && $row["chemistry"] <= 69)  {
                                echo "A-";
                            } elseif ($row["chemistry"] >= 50 && $row["chemistry"] <= 59)  {
                                echo "B";
                            } elseif ($row["chemistry"] >= 40 && $row["chemistry"] <= 49 ) {
                                echo "C";
                            } elseif ($row["chemistry"] >= 33 && $row["chemistry"] <= 39 ) {
                                echo "D";
                            }else {
                                echo "F";
                            } 
                            ?>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ICT</td>
                        <td><?= $row['ict'] ?></td>
                        <td>
                            <?php
                            if ($row["ict"] > 100 ) {
                                echo "Invalid";
                            } elseif ($row["ict"] >= 80 && $row["ict"] <= 100) {
                                echo "A+";
                            } elseif ($row["ict"] >= 70 && $row["ict"] <= 79) {
                                echo "A";
                            } elseif ($row["ict"] >= 60 && $row["ict"] <= 69)  {
                                echo "A-";
                            } elseif ($row["ict"] >= 50 && $row["ict"] <= 59)  {
                                echo "B";
                            } elseif ($row["ict"] >= 40 && $row["ict"] <= 49 ) {
                                echo "C";
                            } elseif ($row["ict"] >= 33 && $row["ict"] <= 39 ) {
                                echo "D";
                            }else {
                                echo "F";
                            } 
                            ?>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
        }
    ?>        
</body>
</html>