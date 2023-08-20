<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
</head>
<body>
    <div class='container my-3'>
        <h2>จองโรงแรม</h2>
        <form action="booking_data.php" method='POST'>
            <div class='from-group'>
                <label for=''>check-in</label>
                <input type='date' name='check_in' id=''>
            </div>
            <div>
                <label for=''>check-out</label>
                <input type='date' name='check_out' id=''>
            </div>
            <div>
                <label for=''>amount</label>
                <input type='text' name='amount_user' id=''>
            </div>
            <input type="submit" value="บันทึก" class='btn btn-success'>
        </from>
</div>
</body>
</html>
