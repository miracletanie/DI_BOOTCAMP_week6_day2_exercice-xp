<php

$note = 50;


if ($note <= 60) {
    $message = 'la note sera la première division';
} elseif ( $note >= 45  && $note <= 59) {
    echo 'grade will be Second Division';
}  elseif ( $note >= 33  && $note <= 44 ) {
    echo 'grade will be Third Division';
} else

    echo'student will be Fail';


