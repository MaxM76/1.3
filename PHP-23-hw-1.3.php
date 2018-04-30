$x = rand(0,100);
echo 'Число '.$x;
$x = $_GET['x'];

$var1 = 1;
$var2 = 1;

if ($var1 > $x) { 
  echo 'user not';
}
else
{
  if ($var1 == $x) {
    echo 'user yes'
  }
  else
  {
    $var3 = $var1;
    $var1 = $var1 + $var2;
    $var2 = $var3;
  }
}

