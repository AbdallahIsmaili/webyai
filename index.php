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
<body class="bg-gradient-to-r from-stone-100 via-stone-300 to-pink-300">
    
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center p-4 xl:my-3 xl:p-6">
            <div class="logo flex justify-between items-center ">
                <img src="img/webyai_logo.png" alt="logo" class="mx-2 w-[40px] rounded-lg">
                <span class="text-xl antialiased font-extrabold">WebyAI</span>
            </div>

            <ul class="xl:flex lg:flex md:flex xl:justify-between lg:justify-between md:justify-between xl:items-center lg:items-center md:items-center hidden w-[75%] xl:w-[50%] xl:text-md md:text-sm antialiased font-normal">
                <li class="opacity-80 hover:opacity-90 transition ease-in-out duration-300">
                    <a href="" class="font-medium">Home</a>
                </li>
                <li class="opacity-80 hover:opacity-90 transition ease-in-out duration-300">
                    <a href="" class="font-medium">Docs</a>
                </li>
                <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                    <a href="" class="font-medium">About</a>
                </li>
                <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                    <a href="" class="font-medium">Easy-build</a>
                </li>
                <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                    <a href="" class="font-medium">Professional</a>
                </li>
                <li>
                    <a href="build/builder.php" class="text-white xl:py-3 lg:py-3 py-2 xl:px-12 lg:px-10 px-8 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">Get started</a>
                </li>

            </ul>

            <i class="text-white sm:block xl:hidden lg:hidden md:hidden py-2 xl:px-12 lg:px-10 px-8 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">More</i>

        </nav>

        <!-- HERO: -->

        <div class="mb-2">
        
            <div class="mx-40 mt-24 text-center">
                <h1 class="text-7xl font-extrabold">Effortlessly create modern website with zero code.</h1>
                <p class="mx-52 my-4 font-medium opacity-80">Unleash your creativity with our intuitive website builder! Craft personalized <span class="text-blue-800"> Landing pages, E-commerce sites, Blogs, and Portfolios effortlessly </span>, powered by Tailwind CSS for a seamless online presence.</p>

                <div class="m-8">
                    <button class="py-3 px-10 rounded-lg bg-black text-white hover:opacity-80 transition ease-in-out duration-500"> <a href="" class="font-medium text-md">Build Effortlessly Now</a> </button>

                    <button class="py-3 px-10 rounded-lg text-black hover:underline hover:underline-offset-2 transition ease-in-out duration-300"> <a href="" class="font-medium text-md">Exploring?</a> </button>

                </div>

            </div>

        </div>

        <!-- CARDS: -->
        <div class="flex justify-center items-center flex-wrap mt-6 ">

            <div class="bg-stone-100 opacity-95 shadow-md w-[150px] mx-2 my-7 cursor-pointer p-6 h-36 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">Landing page</span>
                <img src="img/icons/landing-page.png" alt="" class="w-16 my-4 mx-auto">
            </div>
            <div class="bg-stone-100 opacity-95 shadow-md w-[150px] mx-2 my-7 cursor-pointer p-6 h-36 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">E-commerce</span>
                <img src="img/icons/website.png" alt="" class="w-16 my-4 mx-auto">
            </div>
            <div class="bg-stone-100 opacity-95 shadow-md w-[150px] mx-2 my-7 cursor-pointer p-6 h-36 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">Blog</span>
                <img src="img/icons/blogging.png" alt="" class="w-16 my-4 mx-auto">
            </div>
            <div class="bg-stone-100 opacity-95 shadow-md w-[150px] mx-2 my-7 cursor-pointer p-6 h-36 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">Portfolio</span>
                <img src="img/icons/application.png" alt="" class="w-16 my-4 mx-auto">
            </div>
            <div class="bg-stone-100 opacity-95 shadow-md w-[150px] mx-2 my-7 cursor-pointer p-6 h-36 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">Dashboard</span>
                <img src="img/icons/data-analysis.png" alt="" class="w-16 my-4 mx-auto">
            </div>

        </div>

    </div>

</body>
</html>