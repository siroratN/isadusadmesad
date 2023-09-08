<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>management room</title>
</head>
<body>
<div class='container my-3'>
        <h2>เพิ่มประเภทห้อง</h2>
        <form action="typedata.php" method='POST'>
            <div>
                <label for=''>type_id</label>
                <input type='radio' name='type_id' value='01'>01
                <input type='radio' name='type_id' value='02'>02
                <input type='radio' name='type_id' value='03'>03
                <input type='radio' name='type_id' value='04'>04
            </div>
            <div>
                <label for=''>type_name</label>
                <input type='radio' name='type_name' value='01'>Standard
                <input type='radio' name='type_name' value='02'>Superior
                <input type='radio' name='type_name' value='03'>Deluxe
                <input type='radio' name='type_name' value='04'>Suite
            </div>
            <!-- <div>
                <label for=''>room_name</label>
                <input type='text' name='room_name' id=''>
            </div> -->
            <div>
                <label for=''>price</label>
                <input type='text' name='price' id=''>
            </div>
            <div>
                <label for=''>total_rooms</label>
                <input type='text' name='total_rooms' id=''>
            </div>
            <!-- <div>
                <label for=''>detail</label>
                <input type='text' name='detail' id=''>
            </div>
            <div>
                <label for=''>imagepath</label>
                <input type='text' name='imagepath' id=''>
            </div> -->
            <input type="submit" value="submit" class='btn btn-success'>
            <input type="reset" value="reset">
        </from>
</body>
</html>
