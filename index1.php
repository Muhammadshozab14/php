<?php

if(isset($_POST['word'])){
    echo'Your Word Is' . strrev($_POST['word']);

} else
    echo '<form method="post" action="">
    <label>Enter Your Word</label>
    <input type="text" name="word">
    <button type=submit>Submit</button>
</form>
';