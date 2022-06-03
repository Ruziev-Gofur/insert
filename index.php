<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="text" name="family" placeholder="Family"><br><br>
        <input type="submit" name="s1" value="Kiritish"><br><br>
    </form>
    <?php
    if (isset($_GET["s1"])) 
    {
        $con=mysqli_connect("localhost","root","","web") or die("Malunot toliq emas");

        $s=$_GET["name"];
        $m=$_GET["family"];
        if (($s=="") || ($m=="")) {
            echo "Malunot toliq emas";
        }
        else{
        $sql="insert into ism(name,family) values('{$s}','{$m}')";
        $r=mysqli_query($con,$sql);
        $id = mysqli_insert_id($con);
        if ($r)
        {
            echo $id;
        }
    }
}
    ?>
</body>
</html>
