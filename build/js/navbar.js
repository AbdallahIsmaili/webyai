// // var websiteNameInput = document.getElementById("websiteName");
// // var isNavbarCheckbox = document.getElementById('isNavbar');
// // var NavbarBuilderDiv = document.getElementById('navbarBuildingSection');
// // var webResultDiv = document.getElementById('webResult');
// // var navbarBuildingForm = document.getElementById("navbarBuildingForm");

// // websiteNameInput.addEventListener('input', function() {
// //     // webResultDiv.innerHTML = websiteNameInput.value;
// //     submitForm();
// // });

// // isNavbarCheckbox.addEventListener('change', function() {
// //     if (isNavbarCheckbox.checked) {
// //         NavbarBuilderDiv.style.display = 'block';
// //         // webResultDiv.innerHTML = navbarHTML;
// //         submitForm();
// //     } else {
// //         NavbarBuilderDiv.style.display = 'none';
// //         // webResultDiv.innerHTML = ''
// //     }
// // });

// // var isNavbarLogo = document.getElementById('isNavbarLogo');
// // var navbarLogoFileInput = document.getElementById('navbarLogoFile');

// // isNavbarLogo.addEventListener('change', function() {
// //     if (isNavbarLogo.checked) {
// //         navbarLogoFileInput.style.display = 'block';
// //         submitForm();
// //     } else {
// //         navbarLogoFileInput.style.display = 'none';
// //     }
// // });

// // navbarLogoFileInput.addEventListener('change', function(){
// //     submitForm();
// // });


// // function submitForm() {
// //     // Serialize the form data
// //     var formData = $('#navbarBuildingForm').serialize();

// //     // Send an AJAX request to the server
// //     $.ajax({
// //         type: 'POST',
// //         url: 'buildClass.php', // Replace with your PHP script URL
// //         data: formData,
// //         success: function(response) {
// //             // Update the result div with the server response
// //             $('#webResult').html(response);
// //         },
// //         error: function(error) {
// //             console.error('Error:', error);
// //         }
// //     });
// // }



// var websiteNameInput = document.getElementById("websiteName");
// var isNavbarCheckbox = document.getElementById('isNavbar');
// var NavbarBuilderDiv = document.getElementById('navbarBuildingSection');
// var webResultDiv = document.getElementById('webResult');
// var navbarBuildingForm = document.getElementById("navbarBuildingForm");
// var isNavbarLogo = document.getElementById('isNavbarLogo');
// var navbarLogoFileInput = document.getElementById('navbarLogoFile');
// var navbarPage1 = document.getElementById('navbarPage1');
// var navbarPage2 = document.getElementById('navbarPage2');
// var navbarPage3 = document.getElementById('navbarPage3');
// var navbarPage4 = document.getElementById('navbarPage4');
// var navbarPage5 = document.getElementById('navbarPage5');
// var isActiveButton = document.getElementById('isActiveButton');
// var navbarActiveLink = document.getElementById('navbarActiveLink');
// var activeLinkContent = document.getElementById('activeLinkContent');
// var activeLinkColor = document.getElementById('activeLinkColor');
// var navbarBackgroundColor = document.getElementById('navbarBackgroundColor');

// websiteNameInput.addEventListener('input', function() {
//     submitForm();
// });

// isNavbarCheckbox.addEventListener('change', function() {
//     if (isNavbarCheckbox.checked) {
//         NavbarBuilderDiv.style.display = 'block';
//     } else {
//         NavbarBuilderDiv.style.display = 'none';
//     }
//     submitForm();
// });

// isNavbarLogo.addEventListener('change', function() {
//     if (isNavbarLogo.checked) {
//         navbarLogoFileInput.style.display = 'block';
//     } else {
//         navbarLogoFileInput.style.display = 'none';
//     }
//     submitForm();
// });

// isActiveButton.addEventListener('change', function() {
//     if (isActiveButton.checked) {
//         navbarActiveLink.style.display = 'block';
//     } else {
//         navbarActiveLink.style.display = 'none';
//     }
//     submitForm();
// });

// navbarLogoFileInput.addEventListener('change', function() {
//     submitForm();
// });

// navbarPage1.addEventListener('input', function() {
//     submitForm();
// });

// navbarPage2.addEventListener('input', function() {
//     submitForm();
// });

// navbarPage3.addEventListener('input', function() {
//     submitForm();
// });

// navbarPage4.addEventListener('input', function() {
//     submitForm();
// });

// navbarPage5.addEventListener('input', function() {
//     submitForm();
// });

// activeLinkContent.addEventListener('input', function() {
//     submitForm();
// });

// activeLinkColor.addEventListener('input', function() {
//     submitForm();
// });

// navbarBackgroundColor.addEventListener('input', function() {
//     submitForm();
// });

// function submitForm() {
//     // Use FormData to handle file uploads
//     var formData = new FormData(navbarBuildingForm);

//     // Send an AJAX request to the server
//     $.ajax({
//         type: 'POST',
//         url: 'buildClass.php',
//         data: formData,
//         contentType: false,
//         processData: false,
//         success: function(response) {
//             // Update the result div with the server response
//             $('#webResult').html(response);
//         },
//         error: function(error) {
//             console.error('Error:', error);
//         }
//     });
// }


// var websiteNameInput = document.getElementById("websiteName");
// var isNavbarCheckbox = document.getElementById('isNavbar');
// var NavbarBuilderDiv = document.getElementById('navbarBuildingSection');
// var webResultDiv = document.getElementById('webResult');
// var navbarBuildingForm = document.getElementById("navbarBuildingForm");
// var isNavbarLogo = document.getElementById('isNavbarLogo');
// var navbarLogoFileInput = document.getElementById('navbarLogoFile');
// var navbarPage1 = document.getElementById('navbarPage1');
// var navbarPage2 = document.getElementById('navbarPage2');
// var navbarPage3 = document.getElementById('navbarPage3');
// var navbarPage4 = document.getElementById('navbarPage4');
// var navbarPage5 = document.getElementById('navbarPage5');
// var isActiveButton = document.getElementById('isActiveButton');
// var navbarActiveLink = document.getElementById('navbarActiveLink');
// var activeLinkContent = document.getElementById('activeLinkContent');
// var activeLinkColor = document.getElementById('activeLinkColor');
// var navbarBackgroundColor = document.getElementById('navbarBackgroundColor');


// // Event listeners for input changes
// websiteNameInput.addEventListener('input', submitForm);
// isNavbarCheckbox.addEventListener('change', toggleNavbarBuilder);
// isNavbarLogo.addEventListener('change', submitForm);
// isActiveButton.addEventListener('change', toggleActiveLink);
// navbarLogoFileInput.addEventListener('change', submitForm);
// navbarPage1.addEventListener('input', submitForm);
// navbarPage2.addEventListener('input', submitForm);
// navbarPage3.addEventListener('input', submitForm);
// navbarPage4.addEventListener('input', submitForm);
// navbarPage5.addEventListener('input', submitForm);
// activeLinkContent.addEventListener('input', submitForm);
// activeLinkColor.addEventListener('input', submitForm);
// navbarBackgroundColor.addEventListener('input', submitForm);

// // Function to submit the form using AJAX
// function submitForm() {
//     // Use FormData to handle file uploads
//     var formData = new FormData(navbarBuildingForm);

//     // Send an AJAX request to the server to process the form
//     $.ajax({
//         type: 'POST',
//         url: 'buildClass.php',
//         data: formData,
//         contentType: false,
//         processData: false,
//         success: function (response) {
//             // Update the result div on the result.html page
//             handleResponse(response);

//             // Save the response to another file
//             saveResponseToFile(response);

//             // location.reload();
//         },
//         error: function (error) {
//             console.error('Error:', error);
//         }
//     });
// }

// function handleResponse(response) {
//     // Update the result div on the current page
//     document.getElementById('webResult').innerHTML = response;
// }

// function saveResponseToFile(response) {
//     // Send an AJAX request to save the response to a file
//     $.ajax({
//         type: 'POST',
//         url: 'buildClass.php', // Update with the actual URL of your PHP script
//         data: { response: response },
//         success: function (result) {
//             console.log('Response saved to file:', result);
//         },
//         error: function (error) {
//             console.error('Error saving response to file:', error);
//         }
//     });
// }



// // Function to toggle the visibility of the Navbar Builder section
// function toggleNavbarBuilder() {
//     NavbarBuilderDiv.style.display = isNavbarCheckbox.checked ? 'block' : 'none';
//     submitForm();
// }

// // Function to toggle the visibility of the Active Link settings
// function toggleActiveLink() {
//     navbarActiveLink.style.display = isActiveButton.checked ? 'block' : 'none';
//     submitForm();
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
    var navbarPage6 = document.getElementById('navbarPage6');
    var navbarActiveLink = document.getElementById('navbarActiveLink');
    var isActiveButton = document.getElementById('isActiveButton');
    var activeLinkContent = document.getElementById('activeLinkContent');
    var activeLinkColor = document.getElementById('activeLinkColor');


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

    navbarPage6.addEventListener('input', function() {
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
