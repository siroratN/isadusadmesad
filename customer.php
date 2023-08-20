<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองโรงแรม</title>
    <link rel = 'stylesheet' href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class='container my-3'>
        <h2>บันทึกข้อมูลส่วนตัว</h2>
        <form action="customer_data.php" method='POST'>
            <div>
                <label for=''>firstname</label>
                <input type='text' name='firstname' id=''>
            </div>
            <div>
                <label for=''>lastname</label>
                <input type='text' name='lastname' id=''>
            </div>
            <div>
                <label for=''>phonenumber</label>
                <input type='text' name='phonenumber' id=''>
            </div>
            <div>
                <label for=''>email</label>
                <input type='email' name='email' id=''>
            </div>
            <div>
                <label for=''>gender</label>
                <input type='radio' name='gender' value='male'>ชาย
                <input type='radio' name='gender' value='female'>หญิง
                <input type='radio' name='gender' value='outer'>อื่นๆ
            </div>
            <input type="submit" value="บันทึก" class='btn btn-success'>
        </from>
</div>
</body>
</html>
