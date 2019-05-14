<?php
function Age($date_naissance)
{
    $arr1 = explode('/', $date_naissance);
    $arr2 = explode('/', date('d/m/Y'));

    if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
        return $arr2[2] - $arr1[2];

    return $arr2[2] - $arr1[2] - 1;
}
$ma_date_de_naissance = '27/08/1998';
$mon_age = Age($ma_date_de_naissance);

//Skills
?>