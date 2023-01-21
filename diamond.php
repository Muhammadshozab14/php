<?php
if (isset($_POST['wordd'])) {
    $word = $_POST['wordd'];
    echo $word . "</br>";
    $w_len = strlen($word);
    $w_spt = str_split($word);
    $print = " ";
   
    for ($i = 0; $i < count($w_spt); $i++) {
        $print .= $w_spt[$i];
        
        echo"<div style='text-align: center'> <?php $print </div>";
        echo "".$print . "<br>";
        
    }
    for ($j = 1; $j <= $w_len; $j++) {
        $limit = $w_len - $j;
        echo substr($word, 0, $limit) . '<br>';
       
        /*$a = substr($word, 0, $limit);
        echo $w_len . ' - ' . $a . "<br>";
        echo $w_len - $j;*/
    }

} else
    echo '<form method="post" action="">
    <label>Enter Your Word</label>
    <input type="string" name="wordd">
    <button type="submit">Submit</button>
    </form>';