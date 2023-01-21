<?php

if (isset($_POST['word1'])) {
    $word = $_POST['word1'];
    echo $word . '<br/>';
    $word_len = strlen($word);
    $word_exp = str_split($word);
    $onprint = '';
    for ($i = 0; $i < count($word_exp); $i++) {
        $onprint .= $word_exp[$i];
        echo $onprint . "<br>";
        
    }

} else
    echo '<form method="post" action="">
    <label>Enter Your Word</label>
    <input type="string" name="word1">
    <button type=submit>Submit</button>
</form>
';