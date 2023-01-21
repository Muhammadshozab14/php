<?php
if ( isset($_POST['num']) && isset($_POST['num2']) && isset($_POST['num1'])) {
	echo "Your number is " . $_POST['num'];
    echo "</br>";
    foreach(range($_POST['num1'],$_POST['num2']) as $_POST['num2']){
        echo ($_POST['num'] . "x" . $_POST['num2'] . "=" .$_POST['num'] * $_POST['num2']);
        echo "<br>";
    } 


} else {
	echo '<form method="post" action="">
		<label>Enter Your Number:</label></br/>
        <input type="number" name="num"></br>
        <label>You Want Table Till</label></br>
    	<input type="number" name="num2"></br>
        <label>You Want Table From</label></br>
    	<input type="number" name="num1">
      
		
		<button type="submit">Submit</button>
	</form>';
}



