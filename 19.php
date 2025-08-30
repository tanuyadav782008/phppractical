<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$name = "XYZ";

$subjects = array(
    "Sub1" => array("max" => 50, "obtained" => 40),
    "Sub2" => array("max" => 50, "obtained" => 30),
    "Sub3" => array("max" => 50, "obtained" => 45),
    "Sub4" => array("max" => 50, "obtained" => 48),
    "Sub5" => array("max" => 50, "obtained" => 34),
);

$totalMax = 0;
$totalObt = 0;

foreach($subjects as $sub) {
    $totalMax += $sub["max"];
    $totalObt += $sub["obtained"];
}

$percentage = ($totalObt / $totalMax) * 100;

if($percentage >= 75){
    $result = "Passed With Distinction";
}
elseif($percentage >= 33){
    $result = "Passed";
}
else{
    $result = "Failed";
}

echo "<h2>Marksheet</h2>";
echo "<table>";
echo "<tr><td colspan='3' style='text-align:left'><b>Name :</b> $name</td></tr>";
echo "<tr>
        <th>Subject Name</th>
        <th>Max Marks</th>
        <th>Obtained Marks</th>
      </tr>";

foreach($subjects as $subject => $marks){
    echo "<tr>
            <td>$subject</td>
            <td>{$marks['max']}</td>
            <td>{$marks['obtained']}</td>
          </tr>";
}

echo "<tr>
        <td><b>Total</b></td>
        <td>$totalMax</td>
        <td>$totalObt</td>
      </tr>";
echo "<tr>
        <td><b>Percentage</b></td>
        <td colspan='2'>".round($percentage,2)."%</td>
      </tr>";
echo "<tr>
        <td><b>Result</b></td>
        <td colspan='2'>$result</td>
      </tr>";

echo "</table>";
?>

</body>
</html>