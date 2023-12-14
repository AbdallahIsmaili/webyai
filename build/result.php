<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web by AI - builder</title>

    <link rel="shortcut icon" href="../img/favicon.png" type="image">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                clifford: '#da373d',
            }
            }
        }
        }
    </script>


</head>
<body>

    <div id="htmlResultPage">
        <?php include 'buildClass.php'; ?>
    </div>

    <script src="js/navbar.js"></script>
    
</body>
</html>