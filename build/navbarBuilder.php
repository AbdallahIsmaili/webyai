
<form id="navbarBuildingForm" action="buildClass.php" method="post" enctype="multipart/form-data" class="bg-white rounded-lg p-4 my-6">

    <h4 class="text-2xl font-bold">Start by the Navbar:</h4>
    <br>
    <span class="text-xs opacity-80">Choose a name for your website:</span>

    <br>

    <input type="text" name="website_name" id="websiteName" class="rounded-lg w-full p-2 border" placeholder="Example: webyai" required>

    <br>
    <br>
    
    <span class="text-sm opacity-80">Do you want to add a logo?</span>

    <div class="inline-block py-1 px-6 bg-gray-900 rounded-sm">
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

    <!-- Navbar pages: -->
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

    <!-- Navbar Checkbox: -->
    <span class="text-sm opacity-80">Do you need an active button?</span>

    <div class="inline-block py-1 px-6 bg-gray-900 rounded-sm">
        <input type="checkbox" name="isActiveButton" id="isActiveButton">
        <span class="text-sm text-white opacity-80 pl-3">Sure</span>
    </div>

    <!-- Navbar links: -->
    <div style="display: none;" id="navbarActiveLink">
        
        <div class="">
            <input type="text" name="activeLinkContent" id="activeLinkContent" class="border rounded-md p-2 m-2 w-full" placeholder="Get started">
        </div>

        <span class="text-sm opacity-80 pl-3">Choose the color:</span>
        <input class="border w-full rounded-lg" type="color" name="activeLinkColor" id="activeLinkColor">

    </div>


    <!-- Navbar Background color: -->
    <div id="navbarBackgroundColorDiv" class="my-6">
        <span class="text-lg opacity-80 py-4">Navbar background color?</span>
        <input class="border w-full rounded-lg my-3" type="color" value="#f1f5f9" name="navbarBackgroundColor" id="navbarBackgroundColor">

        <span class="text-lg opacity-80 py-4">Adapt your body background color:</span>
        <input class="border w-full rounded-lg my-3" type="color" value="#ffffff" name="bodyColor" id="bodyColor">

        <span class="text-lg opacity-80 py-4">make body color match navbar:</span>
        <div class="inline-block py-1 px-6 bg-gray-900 rounded-sm">
        <input type="checkbox" name="bodyMatchNavColor" id="bodyMatchNavColor">
        <span class="text-sm text-white opacity-80 pl-3">Sure</span>
    </div>

    </div>

    <button type="submit" name="create_website">Create</button>
</form>
