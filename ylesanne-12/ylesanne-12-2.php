<?php

$lines = file("tootajad.csv", FILE_IGNORE_NEW_LINES);

$male_salaries = [];
$female_salaries = [];
$max_male_salary = 0;
$max_female_salary = 0;

foreach ($lines as $line) {
    list($name, $gender, $salary) = explode(";", $line);

    if ($gender == 'm') {
        $male_salaries[] = $salary;
        if ($salary > $max_male_salary) {
            $max_male_salary = $salary;
        }
    } else {
        $female_salaries[] = $salary;
        if ($salary > $max_female_salary) {
            $max_female_salary = $salary;
        }
    }
}

$avg_male_salary = round(array_sum($male_salaries) / count($male_salaries), 2);
$avg_female_salary = round(array_sum($female_salaries) / count($female_salaries), 2);

echo "Meeste keskmine palk: $avg_male_salary <br>";
echo "Naiste keskmine palk: $avg_female_salary <br>";
echo "Kõrgeim meeste palk: $max_male_salary <br>";
echo "Kõrgeim naiste palk: $max_female_salary <br>";

?>
