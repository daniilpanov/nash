<!DOCTYPE html>
<html lang="ru">

    <head>		
		<link href="style/style.css" rel="stylesheet" />			
    </head>
	
<body >
	
<?php
if($_POST["login"] && $_POST["parol"])
{
	$l=$_POST["login"];
	$p=$_POST["parol"];
}
else{
?>
<table>
<form method="post">
<tr>
	<td>логин</td>
    <td><input type="text" name="login"></td>
</tr>
<tr>
	<td>пароль</td>
    <td><input type="password" name="parol"></td>
</tr>
<tr>
    <td></td>
	<td><input type="submit" value="Войти"></td>
</tr>
</form>
</table>
<?php
die();	
}



//логин
$p1="дп";
$p2="нх";
$p3="нд";
$p4="аг";
$p5="св";
$p6="вр";
$p7="ди";
$p8="вб";
$p9="вк";
//пароль
$lp="z9";

	if(
		$l==$p1  && $p==$lp || 
		$l==$p2  && $p==$lp || 
		$l==$p3  && $p==$lp || 
		$l==$p4  && $p==$lp || 
		$l==$p5  && $p==$lp || 
		$l==$p6  && $p==$lp || 
		$l==$p7  && $p==$lp || 
		$l==$p8  && $p==$lp || 
		$l==$p9  && $p==$lp
	)
	{
		echo "Добро пожаловать в чат";
	}
	else
	{
		echo "Вы не правильно ввели логин или пароль, попробуйте еще раз<br><br>";
		?>
		<table>
		<form method="post">
		<tr>
			<td>логин</td>
			<td><input type="text" name="login"></td>
		</tr>
		<tr>
			<td>пароль</td>
			<td><input type="password" name="parol"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Войти"></td>
		</tr>
		</form>
		</table>
		<?php
	}

?>
</body>
</html>