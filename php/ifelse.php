<?php

$day = "sunday";
if($day == "sunday" || $day == "saturday"){
    echo "happy weekend";
}elseif($day == "monday" || $day == "tuesday" || $day == "wednesday" || $day == "thursday" || $day == "friday"){
    echo "its weekday";
}else{
    echo "unknown";
}

?>