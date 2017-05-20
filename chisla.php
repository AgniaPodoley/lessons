<form method="post">
    Введите число:
<input type="text" name="n">
<input type="submit" value="OK">
</form>
<?php

$a=$_POST['n'];

function print_chislo($chislo){
    for ($b=1;$b<=$chislo;$b++){
        if ($b%2!=0){
            echo $b."<br>";
        }
    }
}

print_chislo($a);

