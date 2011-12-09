<?
if (isset($_POST['invia'])) {

$newpass = crypt ($_POST['pwd'], 'cj');
echo $newpass;
}
  ?>

<form name="newpw" action="<?=$_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="pwd"/>
<input type="submit" name="invia" />

</form>