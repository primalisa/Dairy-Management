<?php
session_start();
if (!isset($_SESSION['User'])){
    header("location:login.php");
}

$mysql = mysqli_connect("localhost", "root", "");
mysqli_select_db($mysql, "dms");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> PRINT BILL PAYMENT </title>
         
    </head>
    <body style="background-color:#8cd5ff;">
        <h3><a href="index.php">HOME</a></h3>
    <center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p> From Date: <input type="text" name="fromdate" id="fromdate"/>
                To Date: <input type="text" name="todate" id="todate"/>
                <p> NOTE : Date should be in YYYY-MM-DD format</p>
                <input style="background-color: orange" type="submit" name="submit" value="Generate"/>
            </p>
    </center>
</form>
<center>

    <table border="border" cellspacing="1" cellpadding="1" align="center">
        <tr> <th>SL No</th> <th> CUSTOMER ID</th> <th>CUSTOMER NAME</th> <th>MILK TYPE</th> <th>TOTAL MILK in LTR</th> <th>TOTAL RUPEES</th> 
        </tr>
        <?php
        $grandtotal = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $fromdate = $_POST["fromdate"];
            $todate = $_POST["todate"];
             $grandtotal = 0;
            echo '<h2 align="center">Bill Payent From ' . $fromdate . ' To ' . $todate . '</h2>';

            if ($fromdate && $todate) {
                $presult = mysqli_query($mysql, "SELECT name, ssn, type, SUM(qty), SUM(total) FROM viewbill WHERE date BETWEEN '" . $fromdate . "' AND '" . $todate . "' GROUP BY ssn");
                $n = 1;
                $grandqty = 0;
                $grandtotal = 0;
            }

            while ($array = mysqli_fetch_row($presult)) {
                print "<tr>";
                print "<td align='center'> $n </td>";
                print "<td align='center'> $array[1] </td>";
                print "<td align='center'> $array[0] </td>";
                print "<td align='center'> $array[2] </td>";
                print "<td align='center'> $array[3] </td>";
                print "<td align='center'> $array[4] </td>";
                print "</tr>";

                $n = $n + 1;
                $grandtotal = $grandtotal + $array[4];
            }
            mysqli_free_result($presult);
            mysqli_close($mysql); 
        }
        ?>
        <tr> <td colspan="5" align="right"> Grand Total Rupees </td> <td align="center"> <?php echo("$grandtotal"); ?> </tr>
    </table>
    <br/>
    <!-- <center> <a href="javascript:window.print()" title="Print"> <b> Print </b> </a></center> -->
</body>
</html>