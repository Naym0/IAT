<!Doctype html>
<head>
<title> Author Registration </title>
<style>
    body {
        background-image: url('background.png');
        align: center;
    }
    input, textarea {
        background-color: pink;
    }
</style>
</head>

<body>
    <h2 style = "text-align: center;"><u> Registration </u></h2>
        <form action="processes/AutRegistration.php" method="post" style = "text-align: center;">
            Full Names:<br>
                <input type="text" name="names" required><br><br>
            Email:<br>
                <input type="text" name="email" required><br><br>
            Address:<br>
                <input type="text" name="address" required><br><br>
            Biography:<br>
                <textarea type="text" name="bio" required></textarea><br><br>
            Date Of Birth:<br>
                <input type="date" name="dob" required><br><br>
            I have been Suspended:<br>
                <input type="radio" name="sus" value="1">True <br>
                <input type="radio" name="sus" value="0">False <br><br>

            <button name="submit">Submit</button>
        </form>
</body>
</html>

