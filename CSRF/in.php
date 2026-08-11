<?php

$user = [
    "name" => "Hamdy",
    "email" => "hamdy@gmail.com"
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>My Account</title>
</head>

<body>

    <h1>My Account</h1>

    <p>Name: <?php echo $user["name"]; ?></p>

    <p>Email: <?php echo $user["email"]; ?></p>

    <form action="change-email.php" method="POST">

        <input
            type="email"
            name="email"
            placeholder="New Email"
        >

        <button type="submit">
            Change Email
        </button>

    </form>

</body>

</html>
