<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางข้อมูลสัตว์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    h2 {
        text-align: center;
        color: #FF3366;
    }

    /* ปรับขอบของตาราง */
    table {
        border-collapse: collapse;
        width: 100%;
        
    }

    th, td {
        padding: 8px;
        text-align: center;
        background-color: #FFBBFF;
    }

    th {
        border: 2px solid #00CDCD;
        color: #551A8B; /* สีข้อความ */
    }

    td {
        border: 1px solid #E0FFFF;
        padding: 10px;
        font-size: 14px;
        border: 2px solid #00EEEE;
    }

    /* ปรับสีพื้นหลังของหัวข้อ */
    .table-header {
        background-color: #00bfff;
        color: white;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    /* ปรับสีของเซลล์ในตาราง */
    td[value="1"] {
        background-color: #98F5FF; /* เปลี่ยนสีสำหรับเซลล์ที่มีค่าเป็น 1 */
        color: #00008B;
        font-size: 16px;
    }

    td[value="0"] {
        background-color: #BBFFFF; /* เปลี่ยนสีสำหรับเซลล์ที่มีค่าเป็น 0 */
    }
</style>
</head>
<body>

<div class="container">
  <h2>ตารางข้อมูลสัตว์</h2>
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>ออกลูกเป็นตัว</th>
        <th>ออกลูกเป็นไข่</th>
        <th>เลี้ยงลูกด้วยนม</th>
        <th>มีขนตามร่างกาย</th>
        <th>ผิวหยาบหรือผิวมีเกล็ด</th>
        <th>สัตว์เลือดอุ่น</th>
        <th>สัตว์เลือดเย็น</th>
        <th>อยู่ทั้งบนบกและในน้ำ</th>
        <th>หายใจด้วยเหงือก</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr name="frog">
        <td>กบ(d1)</td>
        <td name="frog1" value="0"></td>
        <td name="frog2" value="1">1</td>
        <td name="frog3" value="0"></td>
        <td name="frog4" value="0"></td>
        <td name="frog5" value="0"></td>
        <td name="frog6" value="0"></td>
        <td name="frog7" value="1">1</td>
        <td name="frog8" value="1">1</td>
        <td name="frog9" value="0"></td>
        <td>สัตว์ครึ่งบกครึ่งน้ำ</td>

      </tr>
      <tr name="cichlid">
      <td>ปลาหมอ(d2)</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td>สัตว์จำพวกปลา</td>
      </tr>
      <tr name="crocodile">
      <td>จระเข้(d3)</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td>สัตว์เลื้อยคลาน</td>
      </tr>
      <tr name="goldfish">
      <td>ปลาทอง(d4)</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td>สัตว์จำพวกปลา</td>
      </tr>
      <tr name="turtle">
      <td>เต่า(d5)</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td>สัตว์เลื้อยคลาน</td>
      </tr>
      <tr name="dog">
      <td>สุนัข(d6)</td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="0"></td>
        <td>สัตว์เลี้ยงลูกด้วยนม</td>
      </tr>
      <tr name="ostrich">
      <td>นกกระจอกเทศ(d7)</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="1">1</td>
        <td value="0"></td>
        <td>สัตว์จำพวกนก</td>
      </tr>
      <form method="post">
      <tr name="Mysterious animals(1NN)">
      <td>สัตว์ปริศนา(1NN)</td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="0"></td>
        <td>???</td>
      </tr>
      <tr name="Mysterious animals(3NN)">
      <td>สัตว์ปริศนา(3NN)</td>
      <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="1">1</td>
        <td value="0"></td>
        <td value="0"></td>
        <td>???</td>
      </tr>
      <tr name="Mysterious animals(4NN)">
      <td>สัตว์ปริศนา</td>
      <td><id><select name="n1" id="n1">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td><id><select name="n2" id="n2">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td><id><select name="n3" id="n3">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td><id><select name="n4" id="n4">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td><id><select name="n5" id="n5">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td><id><select name="n6" id="n6">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td><id><select name="n7" id="n7">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td><id><select name="n8" id="n8">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td><id><select name="n9" id="n9">
        <option value="0">0</option> 
        <option value="1">1</option> </select></td>
        <td>???</td>
        <tr>
        <form action="process.php" method="post">
  <td><label>ค่า NN : </label></td>
  <td>
    <select id="select1" name="select1"> 
    <option value="NN">กรุณาเลือกNN</option> 
      <option value="1NN">1nn</option> 
      <option value="3NN">3nn</option> 
    </select>
  </td>
  <td><input type="submit" name="submit" value="ตกลง"/></td>
</form>


</tr>

          
    </tbody>
  </table>
</div>
<!-- เรียกใช้งาน JavaScript ของ Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$d1 = [0, 1, 0, 0, 0, 0, 1, 1, 0];
$d2 = [0, 1, 0, 0, 1, 0, 1, 0, 1];
$d3 = [0, 1, 0, 0, 1, 0, 1, 0, 0];
$d4 = [0, 1, 0, 0, 1, 0, 1, 0, 1];
$d5 = [0, 1, 0, 0, 0, 0, 1, 0, 0];
$d6 = [1, 0, 1, 1, 0, 1, 0, 0, 0];
$d7 = [0, 1, 0, 1, 0, 1, 0, 0, 0];
$d8 = [1, 0, 0, 1, 0, 0, 0, 0, 0];
$d9 = [0, 1, 0, 0, 1, 0, 1, 0, 0];


function eucDistance($point1, $point2) {
    $sum = 0;
    for ($i = 0; $i < count($point1); $i++) {
        $sum += pow($point1[$i] - $point2[$i], 2);
    }
    return sqrt($sum);
}
// รับข้อมูลจากแบบฟอร์ม
$ann = array();
$ann[0] = isset($_POST['n1']) ? $_POST['n1'] : 0;
$ann[1] = isset($_POST['n2']) ? $_POST['n2'] : 0;
$ann[2] = isset($_POST['n3']) ? $_POST['n3'] : 0;
$ann[3] = isset($_POST['n4']) ? $_POST['n4'] : 0;
$ann[4] = isset($_POST['n5']) ? $_POST['n5'] : 0;
$ann[5] = isset($_POST['n6']) ? $_POST['n6'] : 0;
$ann[6] = isset($_POST['n7']) ? $_POST['n7'] : 0;
$ann[7] = isset($_POST['n8']) ? $_POST['n8'] : 0;
$ann[8] = isset($_POST['n9']) ? $_POST['n9'] : 0;

// คำนวณระยะทางจากข้อมูลที่รับมาและสร้างตัวแปรระยะทาง
$d1 = eucDistance($d1, $ann);
$d2 = eucDistance($d2, $ann);
$d3 = eucDistance($d3, $ann);
$d4 = eucDistance($d4, $ann);
$d5 = eucDistance($d5, $ann);
$d6 = eucDistance($d6, $ann);
$d7 = eucDistance($d7, $ann);
$d8 = eucDistance($d8, $ann);
$d9 = eucDistance($d9, $ann);

// นำระยะทางทั้งหมดใส่ในอาร์เรย์
$distances = array ($d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9);
// อาร์เรย์สำหรับเก็บข้อมูลสายพันธุ์ของสัตว์
$animals = array(
    "สัตว์ครึ่งบกครึ่งน้ำ",
    "สัตว์จำพวกปลา",
    "สัตว์เลื้อยคลาน",
    "สัตว์จำพวกปลา",
    "สัตว์เลื้อยคลาน",
    "สัตว์เลี้ยงลูกด้วยนม",
    "สัตว์จำพวกนก"
    
);

if (isset($_POST["submit"])) {
  echo "<table>";
  echo "<tr><td colspan='11'>สัตว์ปริศนา : " . implode(" ", $ann) . "</td></tr>";
  echo "</table>";

    // เพิ่มเงื่อนไขเช็คค่าข้อมูลทั้งหมดเป็น 0 หรือไม่
    if (array_sum($ann) == 0) {
      echo "<table>";
        echo "<tr><td>กรุณากรอกข้อมูล</td></tr>";
        echo "</table>";
    } else {
        // แสดงระยะทางของสัตว์แต่ละชนิด
        echo "<table>";
        echo "<tr><td>ระยะทางของสัตว์กบ:</td><td>$d1</td></tr>";
        echo "<tr><td>ระยะทางของสัตว์ปลาหมอ:</td><td>$d2</td></tr>";
        echo "<tr><td>ระยะทางของสัตว์จระเข้:</td><td>$d3</td></tr>";
        echo "<tr><td>ระยะทางของสัตว์ปลาทอง:</td><td>$d4</td></tr>";
        echo "<tr><td>ระยะทางของสัตว์เต่า:</td><td>$d5</td></tr>";
        echo "<tr><td>ระยะทางของสัตว์สุนัข:</td><td>$d6</td></tr>";
        echo "<tr><td>ระยะทางของสัตว์นกกระจอกเทศ:</td><td>$d7</td></tr>";
        echo "<tr><td>ระยะทางของสัตว์ปลาหมอ:</td><td>$d8</td></tr>";
        echo "<tr><td>ระยะทางของสัตว์จระเข้:</td><td>$d9</td></tr>";
        echo "</table>";
        
        if (isset($_POST["select1"])) {
            $select1 = $_POST["select1"];
            switch($select1){
                case "1NN":
                    $index = array_keys($distances, min($distances))[0];
                    if (array_key_exists($index, $animals)) {
                      echo "<table>";
                      echo "<tr><td>สัตว์ปริศนาอาจจะมีสายพันธุ์เป็น :</td><td>$animals[$index]</td></tr>";
                      echo "</table>";
                    } else {
                      echo "<table>";
                      echo "<tr><td>สัตว์ปริศนาอาจจะมีสายพันธุ์เป็น : ไม่พบข้อมูลสายพันธุ์ปริศนา</td></tr>";
                      echo "</table>";
                    }
                    break;
                case "3NN":
                    $minDistances = array();
                    for($i = 0; $i < 3; $i++){
                        $minIndex = array_keys($distances, min($distances))[0];
                        array_push($minDistances, $minIndex);
                        unset($distances[$minIndex]);
                    }
                    
                    $animalCounts = array();
                    foreach ($minDistances as $index) {
                        if (array_key_exists($index, $animals)) {
                            $animal = $animals[$index];
                            if (!array_key_exists($animal, $animalCounts)) {
                                $animalCounts[$animal] = 0;
                            }
                            $animalCounts[$animal]++;
                        }
                    }
                    
                    if (!empty($animalCounts)) {
                        arsort($animalCounts);
                        $keys = array_keys($animalCounts);
                        $suggestion = implode(", ", array_slice($keys, 0, 3));
                        echo "<table>";
                        echo "<tr><td>สัตว์ปริศนาอาจจะมีสายพันธุ์เป็น :</td><td>$suggestion </td></tr>" ;
                        echo "</table>";
                    }
                    break;
            } 
        } else {
            echo "กรุณาเลือกค่า NN";
        }
    }
}
?>  
