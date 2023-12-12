<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web by AI</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

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
<body class="bg-stone-200">
    
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center my-3 p-6">
            <div class="logo flex justify-between items-center ">
                <img src="img/favicon.png" alt="logo" class="mx-2 w-[60px] rounded-lg">
                <span class="text-2xl antialiased font-bold">WebyAI</span>
            </div>

            <ul class="elements flex justify-between items-center w-[50%] text-xl antialiased font-normal">
                <li class="opacity-80 hover:opacity-90 transition ease-in-out duration-300">
                    <a href="">Home</a>
                </li>
                <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                    <a href="">About</a>
                </li>
                <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                    <a href="">Builder</a>
                </li>
                <li>
                    <a href="build/builder.php" class="text-white py-3 px-12 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">Get started</a>
                </li>
            </ul>
        </nav>

    </div>

</body>
</html>