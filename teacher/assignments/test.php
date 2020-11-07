<html>
<body>
    <form method="post">
    <input type="date" name="something" id="">
    <input type="submit" value="asdsa">
    </form>
</body>
</html>
<?php
echo date("Y-m-d", strtotime($_POST['something']));
?>