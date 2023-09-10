<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>management room</title>
</head>
<body>
<div class='container my-3'>
        <h2>ข้อมูลห้อง</h2>
        <form action="roomdata.php" method='POST'>
            <div>
                <label for=''>type_name</label>
                <input type='radio' name='type_name' value='01'>Standard
                <input type='radio' name='type_name' value='02'>Superior
                <input type='radio' name='type_name' value='03'>Deluxe
                <input type='radio' name='type_name' value='04'>Suite
            </div>
            <div>
                <label for=''>room_number</label>
                <input type='text' name='room_number' id=''>
            </div>
            <div>
                <label for=''>floor</label>
                <input type='text' name='floor' id=''>
            </div>
            <div>
                <label for=''>max_child</label>
                <input type='text' name='max_child' id=''>
            </div>
            <div>
                <label for=''>max_adult</label>
                <input type='text' name='max_adult' id=''>
            </div>
            <div>
                <label for=''>detail</label>
                <input type='text' name='detail' id=''>
            </div>
            <div>
                <label for=''>imagepath</label>
                <input type='text' name='imagepath' id=''>
            </div>
            <input type="submit" value="submit" class='btn btn-success'>
            <input type="reset" value="reset">
        </from>
</body>
</html>
