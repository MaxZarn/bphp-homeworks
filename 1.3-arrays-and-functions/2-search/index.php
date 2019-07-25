<?php

function generate($rows, $placesPerRow, $avaliableCount) {
    
    if($rows * $placesPerRow > $avaliableCount) {
        return false;
    }

    $map = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $placesPerRow; $j++) {
            $map[$i][$j] = false;
        }
    }


}


function reserve($map, $row, $place) {
    if ($map[$row - 1][$place - 1] === false) {
        $map[$row - 1][$place -1] = true;
        return true;
    }
    
}

$chairs = 50;
$map = generate(5, 8, $chairs);
$requiredRow = 3;
$requiredPlace = 5;

$reverve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reverve);

$reverve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reverve);


function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}

function checkPlacesOfMap($map,$requireNearPlaces) {
    for($i = 0; $i < count($map); $i++){
        $checkPos = 0;
        $row = $i + 1;
        $places = ["Ряд $row"];        
        for($j = 0; $j < (count($map[$i]) - $requireNearPlaces + 1); $j++) {
            if($checkPos !== $requireNearPlaces) {
                if($map[$i][$j] === FALSE) {
                    $checkPos++;
                    $place = $j + 1;
                    $places[] = "Место $place"; 
                } else {
                    $checkPos = 0;
                }
            }else {
                return $places;
            }
        }     
    }
}
print_r(checkPlacesOfMap($map,2));
