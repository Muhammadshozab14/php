<?php
if(isset($_POST['word1'])){
    $word = $_POST['word1'];
    $w_len = strlen($_POST['word1']);
    $w_split = str_split($w_len);
    $aa = " ";
    for($i=0;$i<count($w_split);$i++){
        $aa .=$w_split[$i];
        echo $aa."<br>";
    }

}else 
    echo'
    <form method="post" action="">
    <label>Enter Your Number :</label>
    <input type="string" name="word1">
    <button type="submit">Submit</button>
    </form>
    ';