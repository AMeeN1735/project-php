<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST Example</title>
</head>
<body>
    <h1>Choose Method: GET or POST</h1>

    *///*فورم نموذج ادخل باستخدام ال (get)
    <form action="form.php" method="GET">
        <h3>GET Method</h3>
        <label for="name_get">Name:</label>
        <input type="text" id="name_get" name="name">
        <label for="age_get">Age:</label>
        <input type="number" id="age_get" name="age">
        <button type="submit">Submit with GET</button>'<pre>'
    </form>'<br>'
///*نموذج ادخال باستخدام )post)
    <form action="form.php" method="POST">
        <h3>POST Method</h3>
        <label for="name_post">Name:</label>
        <input type="text" id="name_post" name="name">
        <label for="age_post">Age:</label>
        <input type="number" id="age_post" name="age">
        <button type="submit">Submit with POST</button>'</pre>'
    </form>'<br>'

    <hr>

   //*عرض البيانات في شريط الرابط باستخدام )(get)استخدام داله لتجنب الهجمات htmlspecialchars
    <h2>Received Data:</h2>
    //////////* وهنا كود php يتحقق من البيانات المرسله عبر post و get////////////////////////////////////////////
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
        echo "<h3>Data received via GET:</h3>";
        $name = htmlspecialchars($_GET['name'] ?? 'notfound');
        $age = htmlspecialchars($_GET['age'] ?? 'notfound');
        echo "Name: $name<br>";
        echo "Age: $age<br>";
    }
    //* التحقق من ارسال البييانات باستحدام post

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
        echo "<h3>Data received via POST:</h3>";
        $name = htmlspecialchars($_POST['name'] ?? 'notfound');
        $age = htmlspecialchars($_POST['age'] ?? 'notfound');
        echo "Name: $name<br>";
        echo "Age: $age<br>";
    }
    ?>
</body>

</html>