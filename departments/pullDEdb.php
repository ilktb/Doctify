<?php
    include "../applications/config.php";

    $arr=$db->query("SELECT * FROM applications WHERE trace=2")->fetchAll();
    
    for($i=0; $i<count($arr); $i++){
        $id = $arr[$i]['id'];
        $type = $arr[$i]['type'];
        $name = $arr[$i]['name'];
        $faculty = $arr[$i]['faculty'];
        $specialty = $arr[$i]['specialty'];
        $course = $arr[$i]['course'];
        $fn = $arr[$i]['fn'];

        echo "<tr>
              <th class='tbBody0'>$id</th>
              <th class='tbBody1'>$type</th>
              <th class='tbBody2'>$name</th>
              <th class='tbBody3'>$faculty</th>
              <th class='tbBody4'>$specialty</th>
              <th class='tbBody5'>$course</th>
              <th class='tbBody6'>$fn</th>
              <th class='tbBody7'><button>OPEN</button></th>
            </tr>";
    }
?>