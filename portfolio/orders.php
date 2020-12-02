<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    header("location:login.php");
}

include('includes/head.html');
require('../../../dbcreds.php');

?>

<body >
<ul class="nav navbar-nav navbar-right">

</ul>
<div class="jumbotron text-center bg-info ">

    <h6><a href="logout.php" class="admin text-light"> <span class="admin"></span> LOGOUT</a><br>
        <a href="guestbook.php" class="admin text-light"> <span class="admin"></span> GuestBook</a><br>
        <a href="index.html" class="admin text-light"> <span class="admin"></span> Portfolio</a>
    </h6><br>

    <!--img src="images/back.jpeg" class="retun-img" alt="back"-->
    <h1>Report Summary</h1>
</div >

 <div >
    <table id="order-table" class="display table-responsive " style="width:auto">
        <thead>
        <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Job</td>
                <td>Company</td>
                <td>Email</td>
                <td>Linkedin</td>
                <td>How We Met</td>
                <td>Date</td>
        </tr>
        </thead>
        <tbody>

        <?php

$sql = "SELECT * FROM `guestbook`";
$result = mysqli_query($cnxn,$sql);

foreach ($result as $row) {

    $order_id = $row['order_id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $job = $row['job'];
    $company = $row['company'];
    $email = $row['email'];
    $link= $row['linkedin'];
    $howWeMet = $row['howWeMet'];
    $order_date = date("M d, Y g:i a", strtotime($row['order_date']));

    echo "<tr>";
    echo "<td>$order_id</td>";
    echo "<td>$fname</td>";
    echo "<td>$lname</td>";
    echo "<td>$job</td>";
    echo "<td>$company</td>";
    echo "<td>$email</td>";
    echo "<td>$link</td>";
    echo"<td>$howWeMet</td>";
    echo "<td>$order_date</td>";
    echo "</tr>";
}

 ?>
        </tbody>
    </table>
</div>

<!-- Footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="scripts/guest.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
   $('#order-table').DataTable({
           "order": [[ 8, "desc" ]]
       });

</script>

</body>

