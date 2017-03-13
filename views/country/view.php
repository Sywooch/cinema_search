<<<<<<< HEAD



<h2><?= $singleCountry->name ?></h2>
=======
<?php
/*
    echo '<pre>';
    var_dump($singleCountry);
    echo '</pre>';
    foreach ($singleCountry as $key => $value )
        echo $key.'-----'.$value;
*/

    echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.((is_null($singleCountry))?'Пустое значение!':$singleCountry['name']);

?>
>>>>>>> c516d62926df177739c63be056101e2281f3509c
