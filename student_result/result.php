<?php
// Declear all Subject value in subject array
$subject['bangla'] = 33;
$subject['English'] = 40;
$subject['Math'] = 40;
$subject['chemistry'] = 40;
$subject['physics'] = 40;


// Check all subject value validation
function validation($subject){
    $validNum = 1;
    foreach ($subject as $key => $value) {
        if(!($value >= 0 && $value <= 100)){
            echo "You have entered the wrong Input value for <strong>$key</strong> <br>";
            $validNum = 0;
            return $validNum;
        }
    }
    return $validNum;
}


function getResult($subject){
    $totalMarks = 0;
    $aveMarks = 0;

    if(validation($subject) == 1){

        $totalMarks = array_sum($subject); //

        

        $aveMarks = $totalMarks / count($subject);

        

        // Check all subject value, if any value less then 33 then dispaly fail on the browser 
        foreach ($subject as $value) {
            if($value < 33){
                echo "The student has failed"; 
                return false;
            }
        }

        echo "Total Marks is $totalMarks <br>"; //Display total marks on the browser

        echo "Average Marks is $aveMarks <br>"; //Display average marks on the browser

        switch ($aveMarks) {
            case ($aveMarks > 79 && $aveMarks < 101):
                echo "grade: A+";
                break;
            case ($aveMarks > 69 && $aveMarks < 80):
                echo "grade: A";
                break;
            case ($aveMarks > 59 && $aveMarks < 70):
                echo "grade: -A";
                break;
            case ($aveMarks > 49 && $aveMarks < 60):
                echo "grade: B";
                break;
            case ($aveMarks > 39 && $aveMarks < 50):
                echo "grade: C";
                break;
            case ($aveMarks > 32 && $aveMarks < 40):
                echo "grade: D";
                break;
            default:
                echo "grade: F";
                break;
        }

    }
}

getResult($subject);
