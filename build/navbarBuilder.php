
<form id="navbarBuildingForm" action="buildClass.php" method="post" enctype="multipart/form-data" class="bg-white rounded-sm p-4 mb-6">

    <h4 class="text-2xl font-bold">Start by the Navbar:</h4>
    <br>
    <span class="text-xs opacity-80">Choose a name for your website:</span>

    <br>

    <input type="text" name="website_name" id="websiteName" class="rounded-lg w-full p-2 border" placeholder="Example: webyai" required>

    <br>
    
    <span class="text-xs opacity-80 mt-1">Choose text color:</span>

    <br>

    <input type="color" name="website_name_color" id="websiteNameColor" class="rounded-lg w-1/6 h-12" value="#000000">
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
        <span class="text-sm opacity-80">Change the nav elements as you want (3-6 elements).</span>

        <div id="inputsPagesLinksContainer">
            <!-- Initial inputs -->
            <div class="input-container">
                <input type="text" name="navbarPage1" class="border rounded-md p-2 mt-2 w-full" placeholder="Home">
                <button type="button" class="delete-btn text-red-500 text-sm" onclick="deleteInput(this); submitForm()">Remove</button>
            </div>
            <div class="input-container">
                <input type="text" name="navbarPage2" class="border rounded-md p-2 mt-2 w-full" placeholder="About">
                <button type="button" class="delete-btn text-red-500 text-sm" onclick="deleteInput(this); submitForm()">Remove</button>
            </div>
            <div class="input-container">
                <input type="text" name="navbarPage3" class="border rounded-md p-2 mt-2 w-full" placeholder="Contact">
                <button type="button" class="delete-btn text-red-500 text-sm" onclick="deleteInput(this); submitForm()">Remove</button>
            </div>
        </div>

        <button type="button" onclick="addInput(); submitForm()" class="btn py-2 rounded-md px-8 bg-gray-100 my-3">Add another nav element</button>

        <br>
        <span class="text-xs opacity-80 mt-2">Choose text color:</span>

        <br>

        <input type="color" name="navbarPageTextColor" id="navbarPageTextColor" class="rounded-lg w-1/6 h-12" value="#000000">

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

        <span class="text-sm opacity-80 pl-3">Choose button color:</span>
        <input class="border w-full rounded-lg" type="color" name="activeLinkColor" id="activeLinkColor" value="#000000">

        <br>
        <span class="text-xs opacity-80 mt-2 pl-3">Choose text color:</span>

        <br>

        <input type="color" name="activeLinkContentTextColor" id="activeLinkContentTextColor" class="rounded-lg w-1/6 h-12" value="#ffffff">

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

<script>

    var inputsPagesLinksContainer = document.getElementById('inputsPagesLinksContainer');
    var navbarBuildingForm = document.getElementById('navbarBuildingForm');
    var navbarBackgroundColor = document.getElementById('navbarBackgroundColor');
    var bodyColor = document.getElementById('bodyColor');
    var bodyMatchNavColor = document.getElementById('bodyMatchNavColor');
    var isActiveButton = document.getElementById('isActiveButton');
    var activeLinkContent = document.getElementById('activeLinkContent');
    var activeLinkColor = document.getElementById('activeLinkColor');
    var websiteNameColor = document.getElementById('websiteNameColor');
    var navbarPageTextColor = document.getElementById('navbarPageTextColor');
    var activeLinkContentTextColor = document.getElementById('activeLinkContentTextColor');

    inputsPagesLinksContainer.addEventListener('input', function(event) {
        if (event.target.tagName === 'INPUT') {
            submitForm();
        }
    });

    navbarBackgroundColor.addEventListener('input', function() {
        submitForm();
    });

    websiteNameColor.addEventListener('input', function() {
        submitForm();
    });

    navbarPageTextColor.addEventListener('input', function() {
        submitForm();
    });

    activeLinkContentTextColor.addEventListener('input', function() {
        submitForm();
    });

    bodyColor.addEventListener('input', function() {
        submitForm();
    });

    bodyMatchNavColor.addEventListener('change', function(){
        if (bodyMatchNavColor.checked) {
            bodyColor.value = navbarBackgroundColor.value;
        } 
        submitForm();
    });

    navbarBuildingForm.addEventListener('click', function(event) {
            submitForm();
    });

    isActiveButton.addEventListener('change', function() {
        if (isActiveButton.checked) {
            navbarActiveLink.style.display = 'block';
        } else {
            navbarActiveLink.style.display = 'none';
        }
        submitForm();
    });

    activeLinkContent.addEventListener('input', function() {
        submitForm();
    });

    activeLinkColor.addEventListener('input', function() {
        submitForm();
    });

    function addInput() {
        var container = document.getElementById('inputsPagesLinksContainer');

        // Check if the maximum number of inputs is reached
        if (container.children.length >= 6) {
            alert('Maximum number of inputs reached (6)');
            return;
        }

        var newInput = document.createElement('div');
        newInput.className = 'input-container';

        var input = document.createElement('input');
        input.type = 'text';
        input.name = 'navbarPage' + (container.children.length + 1);
        input.className = 'border rounded-md p-2 mt-2 w-full';
        input.placeholder = 'New Page Link';

        var deleteBtn = document.createElement('button');
        deleteBtn.type = 'button';
        deleteBtn.className = 'delete-btn text-red-500 text-sm';
        deleteBtn.textContent = 'Remove';
        deleteBtn.onclick = function () {
            deleteInput(this);
        };

        newInput.appendChild(input);
        newInput.appendChild(deleteBtn);

        container.appendChild(newInput);
    }

    function deleteInput(button) {
        var container = document.getElementById('inputsPagesLinksContainer');
        var inputContainer = button.parentNode;

        // Check if the minimum number of inputs is reached
        if (container.children.length <= 3) {
            alert('Minimum number of inputs reached (3)');
            return;
        }

        container.removeChild(inputContainer);
    }
</script>

