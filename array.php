<form action="array.php" method="GET">
    <input type="text" name="name">
    <input type="submit">
</form>

<?php

$name = $_GET["name"];

$score = [
    "Maha" => [
        "Score" => "90",
        "Grade" => "A"
    ],
    "Nora" => [
        "Score" => "80",
        "Grade" => "C"
    ],
    "Sara" => [
        "Score" => "40",
        "Grade" => "F"
    ]
];

echo "Score: " . $score[$name]["Score"];
echo "<br>";
echo "Grade: " . $score[$name]["Grade"];

?>
