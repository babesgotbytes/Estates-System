
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee addition</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body class="container">
<form action="AddEmployee1.php" method="POST">

<div class="row" style="margin-top: 70px;margin-left: 30px;">
    <h3 style="font-family: 'Berlin Sans FB Demi';">Addition of a new Employee:</h3><br>


    <div class="col-md-4">

<label style="font-family: 'Arial Narrow';font-size: 18px">EmpName:</label>
<input type="text"   name="Name" class="form-control"autocomplete="off" required>
<label style="font-family: 'Arial Narrow';font-size: 18px">PhoneNo:</label>
<input type="text" name="Phone" class="form-control" autocomplete="off" required>
<label style="font-family: 'Arial Narrow';font-size: 18px">EmpEmail:</label>
<input type="text"   name="Email" class="form-control"  autocomplete="off" required>
    <br><br>
    <button type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-top: 25px"> Submit</button>

</div>
</div>
</form>

</body>
</html>
