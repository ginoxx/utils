<?
if (isset($_POST['invia'])) {

$newpass = md5 ($_POST['pwd']);
echo $_POST['pwd']." -> <strong>".$newpass."<strong>";
}
  ?>

<form name="newpw" action="<?=$_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="pwd"/>
<input type="submit" name="invia" />

</form>