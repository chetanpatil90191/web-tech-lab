<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);

    echo "
    <html>
    <head>
    <link rel='stylesheet' href='form.css'>
    </head>
    <body>
    <div class='container'>
    <h2>Registration Successful!</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Gender:</strong> $gender</p>
    <p><strong>Course:</strong> $course</p>
    <a href='index.html'><button>Back</button></a>
    </div>
    </body>
    </html>
    ";
}
?>
