<?php
if(isset($_POST['dob'])){
    $dt = date_create("");
    $dob1 = date_create($_POST['dob']);
    $dt = date_diff($dt, $dob1);
    echo "Your Age is:".$dt->format("%y");
}
?>
<form method="post" action="">
    <label>Enter Your DOB</label>
    <input type="integer" name="dob">
    <button type="submit">Submit</button>
</form>
<script></script>