
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        

</head>
<body class="bg-gradient-to-r from-stone-100 via-stone-300 to-pink-300">
    
    <div class=" mx-10 px-2">

        <div class="bg-white my-3 rounded-sm p-6">
            <span class="font-bold">Welcome here!</span> let's start building your great website.
        </div>

        <div class="grid grid-flow-row-dense grid-cols-12 gap-6 my-6">

            <div class="h-full col-span-1 text-center">
                <div class="w-[100px] h-[100px] bg-white p-2 rounded-t-sm cursor-pointer hover:bg-gray-100 hover:text-lime-600 transition ease-in-out duration-500">
                    Navbar
                    <br>
                    <i class="fas fa-bars text-2xl p-2"></i>
                </div>
                <div class="w-[100px] h-[100px] bg-white p-2 cursor-pointer hover:bg-gray-100 hover:text-lime-600 transition ease-in-out duration-500">
                    Hero
                    <br>
                    <i class="fas fa-star text-2xl p-2"></i>
                </div>
                <div class="w-[100px] h-[100px] bg-white p-2 rounded-b-sm cursor-pointer hover:bg-gray-100 hover:text-lime-600 transition ease-in-out duration-500">
                    About
                    <br>
                    <i class="fas fa-info-circle text-2xl p-2"></i>
                </div>
            </div>

            <div class="h-full col-span-4">
                <?php
                    include "navbarBuilder.php";
                    // include "heroBuilder.php";

                ?>
            </div>

            <!-- <div id="webResult" class=" bg-white col-span-3 rounded-lg p-6">
            </div> -->

            <div class=" bg-white col-span-7 rounded-sm p-1">
                <iframe src="result.php" width="100%" height="100%" frameborder="0"></iframe>
            </div>

        </div>

    </div>

    <script src="js/navbar.js"></script>
    <script src="js/hero.js"></script>

</body>
</html>