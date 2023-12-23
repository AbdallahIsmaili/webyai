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
<body class="container mx-auto max-w-[1280px] bg-gradient-to-r from-stone-100 via-stone-300 to-pink-300">
    
    <div class="">
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
        
            <div class="xl:mx-40 lg:mx-24 md:mx-16 sm:mx-16 mx-8 xl:mt-24 lg:mt-20 mt-20 text-center">
                <h1 class="xl:text-7xl lg:text-7xl md:text-6xl sm:text-6xl text-5xl font-extrabold">Effortlessly create modern website with zero code.</h1>
                <p class="xl:mx-52 lg:mx-36 md:mx-20 sm:mx-20 mx-12 mt-4 mb-12 xl:font-medium lg:text-sm md:text-sm sm:text-sm text-xs opacity-80">Unleash your creativity with our intuitive website builder! Craft personalized <span class="text-blue-800"> Landing pages, E-commerce sites, Blogs, and Portfolios effortlessly </span>, powered by Tailwind CSS for a seamless online presence.</p>

                <div class="xl:m-8 lg:m-8 md:m-8 m-6">
                    <button class="xl:py-3 lg:py-3 py-2 xl:px-10 lg:px-8 md:px-6 sm:px-6 px-4 rounded-lg bg-black text-white hover:opacity-80 transition ease-in-out duration-500"> <a href="" class="font-medium xl:text-md lg:text-md md:text-sm sm:text-sm text-xs">Build Effortlessly Now</a> </button>

                    <button class="xl:mx-10 lg:mx-10 md:mx-8 sm:mx-6 text-black hover:underline hover:underline-offset-2 transition ease-in-out duration-300"> <a href="" class="font-medium xl:text-md lg:text-md md:text-sm sm:text-sm text-xs">Exploring?</a> </button>

                </div>

            </div>

        </div>

        <!-- CARDS: -->
        <div class="flex justify-center items-center flex-wrap mt-6 mx-6 ">

            <div class="bg-stone-100 opacity-95 shadow-md xl:w-[150px] lg:w-[170px] md:w-[200px] sm:w-[200px] w-80 mx-2 my-2 cursor-pointer p-6 xl:h-36 lg:h-40 md:h-44 h-44 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">Landing page</span>
                <img src="img/icons/landing-page.png" alt="" class="w-16 my-4 mx-auto">
            </div>

            <div class="bg-stone-100 opacity-95 shadow-md xl:w-[150px] lg:w-[170px] md:w-[200px] sm:w-[200px] w-80 mx-2 my-2 cursor-pointer p-6 xl:h-36 lg:h-40 md:h-44 h-44 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">E-commerce</span>
                <img src="img/icons/website.png" alt="" class="w-16 my-4 mx-auto">
            </div>

            <div class="bg-stone-100 opacity-95 shadow-md xl:w-[150px] lg:w-[170px] md:w-[200px] sm:w-[200px] w-80 mx-2 my-2 cursor-pointer p-6 xl:h-36 lg:h-40 md:h-44 h-44 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">Blog</span>
                <img src="img/icons/blogging.png" alt="" class="w-16 my-4 mx-auto">
            </div>

            <div class="bg-stone-100 opacity-95 shadow-md xl:w-[150px] lg:w-[170px] md:w-[200px] sm:w-[200px] w-80 mx-2 my-2 cursor-pointer p-6 xl:h-36 lg:h-40 md:h-44 h-44 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">Portfolio</span>
                <img src="img/icons/application.png" alt="" class="w-16 my-4 mx-auto">
            </div>

            <div class="bg-stone-100 opacity-95 shadow-md xl:w-[150px] lg:w-[170px] md:w-[200px] sm:w-[200px] w-80 mx-2 my-2 cursor-pointer p-6 xl:h-36 lg:h-40 md:h-44 h-44 rounded-lg text-center">
                <span class="opacity-80 font-medium text-sm">Dashboard</span>
                <img src="img/icons/data-analysis.png" alt="" class="w-16 my-4 mx-auto">
            </div>

        </div>

    </div>

</body>
</html>