<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Task 2, Lab5</title>
</head>
<body>
<?php 
    /*время лекций*/
     $time = array("English"=>"14.30", "French"=>"12.00", "German"=> "16.15", 
            "Italian"=> "18.30", "Portuguese"=> "11.20", "Spanish"=> "13.40", 
            "Russian" => "19.10", "Chinese" => "10.55");
    /*имена лекторов*/
    $lectors = array("English"=>"Richard Grant", "French"=>"Thomas Lester", "German"=> "Margaret Caldwell", 
            "Italian"=> "Alisha Crawford", "Portuguese"=> "Reynold Baker", "Spanish"=> "Francine Richards", 
            "Russian" => "Brian Nicholson", "Chinese" => "Jessica West");
    /*дата проведения лекций*/
    $data = "10 марта";
    define("CONST_TIME","18.00"); 

    /*данные пользователя */
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $language = $_POST["language"]; 
    $gender = $_POST["gender"];

    /*вывод приветствия исходя из пола человека */
    if($gender == "Female")
    {
        echo "Здравствуйте, уважаемая $firstname $lastname!<br>";
    }
    else 
    {
        echo "Здравствуйте, уважаемый $firstname $lastname!<br>";
    }

    /*проверка количества выбранных языков */
    if(!isset($language))
    {
        echo "Вы не выбрали язык для изучения. <br> 
        Приходите на собрание в " . CONST_TIME . ", где вам помогут определиться с выбором";
    }
    else
    {
        echo "Выбранные вами лекции состоятся $data. <br>";
        for($i=0; $i<count($language); $i++)
           {
             $l = $language[$i];
             echo "<li> Лекция по $l в $time[$l]. Ваш лектор $lectors[$l].</li>";
           }
    }
?>
</body>
</html>