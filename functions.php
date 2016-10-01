<?php
class Age{
    public function __construct($a)
    {
        $this->checkAge($a);
    }

    //Метод для проверки возраста
    public function checkAge($age){
        if($age>18 and $age<=59){
            echo "Вам еще работать и работать";
        }
        elseif($age>=59){
            echo "Вам пора на пенсию";
        }
        elseif($age>1 and $age<=17){
            echo "Вам еще рано работать";
        }
        else{
            echo "Неизвестный возраст";
        }
    }
}

$newperson=new Age($_POST["age"]);
