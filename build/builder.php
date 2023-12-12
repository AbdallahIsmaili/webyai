

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
<body class="bg-stone-200">
    
    <div class=" mx-auto px-4">

        <div class="bg-white my-3 rounded-xl p-6">
            <span class="font-bold">Welcome here!</span> let's start building your great website.
        </div>

        <div class="grid grid-flow-row-dense grid-cols-5 gap-4 my-6 ">
            
            <div class="h-screen bg-white col-span-2 rounded-lg p-4">
                <form id="navbarBuildingForm" action="buildClass.php" method="post" enctype="multipart/form-data">
                
                    <h4 class="text-2xl font-bold">Start by the name:</h4>
                    <br>
                    <span class="text-xs opacity-80">choose a name for your website:</span>

                    <br>

                    <input type="text" name="website_name" id="websiteName" class="rounded-lg w-full p-2 border" placeholder="Example: webyai" required>

                    <br>
                    <br>
                    
                    <span class="text-sm opacity-80">Do you need a Navbar?</span>

                    <div class="inline-block py-1 px-6 bg-gray-900 rounded-xl">
                        <input type="checkbox" name="isNavbar" id="isNavbar">
                        <span class="text-sm text-white opacity-80 pl-3">Yes</span>
                    </div>

                    <!-- Navbar builder section: -->
                    <div style="display: none;" id="navbarBuildingSection">
                        
                        <div class="inline-block my-2 py-1 px-6 bg-gray-600 rounded-md">
                            <input type="checkbox" name="isNavbarLogo" id="isNavbarLogo">
                            <span class="text-sm text-white opacity-80 pl-3">Add logo</span>
                        </div>
                        <input style="display: none;" class="border w-full rounded-lg" type="file" name="navbarLogoFile" id="navbarLogoFile">

                    </div>

                    <!-- Navbar titles: -->
                    <div class="my-6">

                        <span class="text-sm opacity-80">Change the pages as you want.</span>

                        <div class="">
                            <input type="text" name="navbarPage1" id="navbarPage1" class="border rounded-md p-2 m-2 w-full" placeholder="Home">
                            <input type="text" name="navbarPage2" id="navbarPage2" class="border rounded-md p-2 m-2 w-full" placeholder="About">
                            <input type="text" name="navbarPage3" id="navbarPage3" class="border rounded-md p-2 m-2 w-full" placeholder="Contact">
                            <input type="text" name="navbarPage4" id="navbarPage4" class="border rounded-md p-2 m-2 w-full" placeholder="Pricing">
                            <input type="text" name="navbarPage5" id="navbarPage5" class="border rounded-md p-2 m-2 w-full" placeholder="Members">
                        </div>

                    </div>

                </form>
            </div>

            <div id="webResult" class="bg-white col-span-3 rounded-lg p-6">
                
            </div>

        </div>

    </div>

    <script src="js/checking.js"></script>

</body>
</html>