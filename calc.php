<?php
// Calculator
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$op = $_GET["op"];

if (empty($number1)) {
    $result = "الرقم الأول فارغ";
} else if (empty($number2)) {
    $result = "الرقم الثاني فارغ";
} else if (empty($op)) {
    $result = "يرجى ادخال العملية + أو - أو * أو / للحساب";
} else {
    if ($op === "+") {
        $result =  $_GET["number1"] + $_GET["number2"];
    } elseif ($op === "-") {
        $result =  $_GET["number1"] - $_GET["number2"];
    } elseif ($op === "*") {
        $result =  $_GET["number1"] * $_GET["number2"];
    } elseif ($op === "/") {
        $result =  $_GET["number1"] / $_GET["number2"];
    }
}



?>


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>الرقم الأول:</label>
                <input type="number" id="numl" name="number1" class="form-control">
            </div>

            <div>
                <label>الرقم الثاني:</label>
                <input type="number" id="num2" name="number2" class="form-control">
            </div>
            <br>
            <div>
                <label>العملية:</label>
                <input rtpe="text" name="op" class="form-control">



            </div>





            <br>
            <div class="alert alert-success">
                <?php
                echo $result
                ?>
            </div>

            <br>
            <input type="submit" class="btn btn-primary">

        </form>
    </div>
</body>