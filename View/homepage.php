<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
    <?php require 'includes/header.php'?>
    <section>
        <h4>Hello <?php echo $user->getName()?>,</h4>
        <p>Put your content here.</p>
    </section>
    <?php require 'includes/footer.php'?>
</body>
</html>