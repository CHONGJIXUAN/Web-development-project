<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Booking</h1>

    <form action="booking.php" method="post">
        <div>
            <label for="name">User Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="contact_number">Contact Number</label>
            <input type="contact_number" id="contact_number" name="contact_number">
        </div>
        <div>
            <label for="address">Address</label>
            <input type="address" id="address" name="address">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <button><a href="booking.php">Booking Now</a></button>
    </form>
</body>
</html>