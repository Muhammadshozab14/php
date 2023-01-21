<?php
$namerr = $emailrr = $genderr = "";
$fname = $email = $comments = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = inputt($_POST["name"]);
    if (strlen($name) < 3) {
        $namerr = 'Invalid Name';
    }
    $email = inputt($_POST["email"]);
        if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $emailrr = "Invalid E-mail";
    }
    if (empty($_POST["comments"])) {
        $comments = "";
    } else {
        $comments = inputt($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $genderr = "Gender is required";
    } else {
        $gender = inputt($_POST["gender"]);
    }

}
function inputt($inpdata)
{
    $inpdata = trim($inpdata);
    $inpdata = stripslashes($inpdata);
    $inpdata = htmlspecialchars($inpdata);
    return $inpdata;
}
?>

<h2>Enter Your Infomation</h2>
<p><span class="error">Required Fields</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    Name: <input type="text" name="name"><br>
    <span class="error">
        <?php echo $namerr; ?>
    </span><br>
    <br>
    E-mail:<input type="text" name="email"><br>
    <span class="error">
        <?php echo $emailrr; ?>
    </span>
    <br>
    Comments:<br><textarea name="comment" rows="5" cols="30"></textarea><br>
    <br>
    Gender:<br>
    Female:<input type="radio" name="gender" value="Female">
    Male:<input type="radio" name="gender" value="Male">
    Others:<input type="radio" name="gender" value="Others">
    <span class="error">* <?php echo $genderr; ?></span>
    <br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
echo "<h3>YOUR INPUTS</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comments;
echo "<br>";
echo $gender;