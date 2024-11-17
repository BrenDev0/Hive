<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../private/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kavoon&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Hive: Anonymous Journal</title>
</head>
<body>
    <main>
        <header>
            <h1>Hive</h1>
            <img src="../private/assets/Group 3.png" alt="" />
        </header>
        <?php include '../private/templates/nav.php';?>
        <div id="main-con">
            <section id="toolbar">
                <input type="text">
                <div id="tags"></div>
            </section>
            <section id='content'>
                <!-- render content here -->
            </section>
        </div>
    </main>
</body>
</html>