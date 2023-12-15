
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
<body class="bg-gradient-to-r from-stone-100 via-stone-300 to-pink-300">
    
    <div class=" mx-20 px-4">

        <div class="bg-white my-3 rounded-xl p-6">
            <span class="font-bold">Welcome here!</span> let's start building your great website.
        </div>

        <div class="grid grid-flow-row-dense grid-cols-5 gap-4 my-6 ">

            <div class="h-full col-span-2">
                <?php
                    include "navbarBuilder.php";
                    include "heroBuilder.php";

                ?>
            </div>

            <!-- <div id="webResult" class=" bg-white col-span-3 rounded-lg p-6">
            </div> -->

            <div class=" bg-white col-span-3 rounded-lg p-6">
                <iframe src="result.php" width="100%" height="100%" frameborder="0"></iframe>
            </div>

        </div>

    </div>

    <script src="js/navbar.js"></script>
    <script src="js/hero.js"></script>

</body>
</html>