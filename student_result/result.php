<?php

$marks = [50, 60, 33, 70, 95];

function calculateResult($marks) {
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark {$mark} is invalid<br>";
            return;
        }
    }

    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Fail<br>";
            return;
        }
    }

    
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);


    switch (true) {
        case ($averageMarks >= 80):
            $grade = "A+";
            break;
        case ($averageMarks >= 70):
            $grade = "A";
            break;
        case ($averageMarks >= 60):
            $grade = "A-";
            break;
        case ($averageMarks >= 50):
            $grade = "B";
            break;
        case ($averageMarks >= 40):
            $grade = "C";
            break;
        case ($averageMarks >= 33):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    
    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: $averageMarks<br>";
    echo "Grade: $grade<br>";
}


calculateResult($marks);

?>
