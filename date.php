<?php
if (isset($_POST['dt2'])) {
    $dt = date_create('');
    echo "Today's Date: ".date_format($dt, "Y/m/d");
    echo "<br>";
    $date2 = date_create($_POST['dt2']);
    $dtdif = date_diff($dt, $date2);
    echo "Difference :".$dtdif->format("%R%a days");
}
?>
    <form method="post" action="">
    <label>Date:</label><br>
    <input text="integer" name="dt2"><br>
    <button type="submit">Submit</button>
    </form>