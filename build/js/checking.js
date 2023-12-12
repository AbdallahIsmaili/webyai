// var websiteNameInput = document.getElementById("websiteName");
// var isNavbarCheckbox = document.getElementById('isNavbar');
// var NavbarBuilderDiv = document.getElementById('navbarBuildingSection');
// var webResultDiv = document.getElementById('webResult');
// var navbarBuildingForm = document.getElementById("navbarBuildingForm");

// websiteNameInput.addEventListener('input', function() {
//     // webResultDiv.innerHTML = websiteNameInput.value;
//     submitForm();
// });

// isNavbarCheckbox.addEventListener('change', function() {
//     if (isNavbarCheckbox.checked) {
//         NavbarBuilderDiv.style.display = 'block';
//         // webResultDiv.innerHTML = navbarHTML;
//         submitForm();
//     } else {
//         NavbarBuilderDiv.style.display = 'none';
//         // webResultDiv.innerHTML = ''
//     }
// });

// var isNavbarLogo = document.getElementById('isNavbarLogo');
// var navbarLogoFileInput = document.getElementById('navbarLogoFile');

// isNavbarLogo.addEventListener('change', function() {
//     if (isNavbarLogo.checked) {
//         navbarLogoFileInput.style.display = 'block';
//         submitForm();
//     } else {
//         navbarLogoFileInput.style.display = 'none';
//     }
// });

// navbarLogoFileInput.addEventListener('change', function(){
//     submitForm();
// });


// function submitForm() {
//     // Serialize the form data
//     var formData = $('#navbarBuildingForm').serialize();

//     // Send an AJAX request to the server
//     $.ajax({
//         type: 'POST',
//         url: 'buildClass.php', // Replace with your PHP script URL
//         data: formData,
//         success: function(response) {
//             // Update the result div with the server response
//             $('#webResult').html(response);
//         },
//         error: function(error) {
//             console.error('Error:', error);
//         }
//     });
// }



var websiteNameInput = document.getElementById("websiteName");
var isNavbarCheckbox = document.getElementById('isNavbar');
var NavbarBuilderDiv = document.getElementById('navbarBuildingSection');
var webResultDiv = document.getElementById('webResult');
var navbarBuildingForm = document.getElementById("navbarBuildingForm");
var isNavbarLogo = document.getElementById('isNavbarLogo');
var navbarLogoFileInput = document.getElementById('navbarLogoFile');
var navbarPage1 = document.getElementById('navbarPage1');
var navbarPage2 = document.getElementById('navbarPage2');
var navbarPage3 = document.getElementById('navbarPage3');
var navbarPage4 = document.getElementById('navbarPage4');
var navbarPage5 = document.getElementById('navbarPage5');

websiteNameInput.addEventListener('input', function() {
    submitForm();
});

isNavbarCheckbox.addEventListener('change', function() {
    if (isNavbarCheckbox.checked) {
        NavbarBuilderDiv.style.display = 'block';
    } else {
        NavbarBuilderDiv.style.display = 'none';
    }
    submitForm();
});

isNavbarLogo.addEventListener('change', function() {
    if (isNavbarLogo.checked) {
        navbarLogoFileInput.style.display = 'block';
    } else {
        navbarLogoFileInput.style.display = 'none';
    }
    submitForm();
});

navbarLogoFileInput.addEventListener('change', function() {
    submitForm();
});

navbarPage1.addEventListener('input', function() {
    submitForm();
});

navbarPage2.addEventListener('input', function() {
    submitForm();
});

navbarPage3.addEventListener('input', function() {
    submitForm();
});

navbarPage4.addEventListener('input', function() {
    submitForm();
});

navbarPage5.addEventListener('input', function() {
    submitForm();
});

function submitForm() {
    // Use FormData to handle file uploads
    var formData = new FormData(navbarBuildingForm);

    // Send an AJAX request to the server
    $.ajax({
        type: 'POST',
        url: 'buildClass.php',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            // Update the result div with the server response
            $('#webResult').html(response);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
}
