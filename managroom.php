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
                <label for=''>room_type</label>
                <input type='radio' name='room_type' value='Standard'>Standard
                <input type='radio' name='room_type' value='Superior'>Superior
                <input type='radio' name='room_type' value='Deluxe'>Deluxe
                <input type='radio' name='room_type' value='Suite'>Suite
            </div>
            <div>
                <label for=''>room_id</label>
                <input type='text' name='room_id' id=''>
            </div>
            <div>
                <label for=''>room_name</label>
                <input type='text' name='room_name' id=''>
            </div>
            <div>
                <label for=''>room_number</label>
                <input type='text' name='room_number' id=''>
            </div>
            <div>
                <label for=''>amount</label>
                <input type='text' name='amount' id=''>
            </div>
            
            <input type="submit" value="submit" class='btn btn-success'>
            <input type="reset" value="reset">
        </from>
</body>
</html>
