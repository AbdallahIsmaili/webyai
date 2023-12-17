<?php

$navbarPagesArray = [];

function generateNavbar($websiteName, $includeLogo = false, $logoUploaded = false, $navbarLogoFile, $navbarPagesArray, $buttonChecked = false,  $activeLinkContent, $activeLinkColor, $navbarBackgroundColor, $bodyColor) {
    
    $navbarHTML = '<nav style="background:'. $navbarBackgroundColor .';" class="flex justify-between items-center p-4 xl:my-3 xl:p-6">
                        <div class="logo flex justify-between items-center ">';
    
    if ($logoUploaded == true) {
        $navbarHTML .= '<img src="' . $navbarLogoFile . ' " alt="logo" class="mx-2 w-[40px] rounded-lg">';
    }

    if ($includeLogo) {
        $navbarHTML .= '
            <span class="text-xl antialiased font-extrabold">' . $websiteName . '</span>';
    } else {
        $navbarHTML .= '<span class="text-xl antialiased font-extrabold"></span>'; 
    }
    
    $navbarHTML .= '</div>';

    if(!empty($navbarPagesArray)){

        $navbarHTML .= '<ul class="xl:flex lg:flex md:flex xl:justify-between lg:justify-between md:justify-between xl:items-center lg:items-center md:items-center hidden w-[75%] xl:w-[50%] xl:text-md md:text-sm antialiased font-normal">';

        foreach ($navbarPagesArray as $navbarPage) {
            $navbarHTML .= '<li class="opacity-80 hover:opacity-90 transition ease-in-out duration-300">
                                <a href="" class="font-medium">'.$navbarPage.'</a>
                            </li>';
        }


        if($buttonChecked){

            $navbarHTML .= '
                    <li>
                        <a style="background: '. $activeLinkColor .';" href="build/builder.php" class="text-white xl:py-3 lg:py-3 py-2 xl:px-12 lg:px-10 px-8 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">'.$activeLinkContent.'</a>
                    </li>';
        }

        $navbarHTML .= ' </ul> <i class="text-white sm:block xl:hidden lg:hidden md:hidden py-2 xl:px-12 lg:px-10 px-8 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">More</i>';
    }

    $navbarHTML .= '</nav>';
    
    $navbarHTML .= '<style>
    
                        body{
                            background: '. $bodyColor .';
                        }

                    </style>';
    
    return $navbarHTML;
}


function generateHero(){
    
}

// Example usage:


$websiteName = "Your Website";
$navbarLogoFile = 'webyai_logo.png';
$logoUploaded = false;

$navbarPage1 = null;
$navbarPage2 = null;
$navbarPage3 = null;
$navbarPage4 = null;
$navbarPage5 = null;
$navbarPage6 = null;
$activeLinkContent = 'Get started';
$activeLinkColor = null;
$navbarBackgroundColor = null;
$bodyColor = null;

$buttonChecked = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['website_name'])) {
    
    if(isset($_POST['website_name']) and $_POST['website_name'] != null){
        $websiteName = $_POST['website_name'];
    } else{
        $websiteName =  'WebyAI';
    }
    
    if(isset($_POST['activeLinkContent']) and $_POST['activeLinkContent'] != null){
        $activeLinkContent = $_POST['activeLinkContent'];
        $buttonChecked = true;
    } else{
        $buttonChecked = false;
    }
    
    if(isset($_POST['activeLinkColor']) and $_POST['activeLinkColor'] != null){
        $activeLinkColor = $_POST['activeLinkColor'];
    } else{
        $activeLinkColor = 'blue';
    }
    
    if(isset($_POST['navbarBackgroundColor']) and $_POST['navbarBackgroundColor'] != null){
        $navbarBackgroundColor = $_POST['navbarBackgroundColor'];
    }
    
    if(isset($_POST['bodyColor']) and $_POST['bodyColor'] != null){
        $bodyColor = $_POST['bodyColor'];
    }

    if(isset($_POST['navbarPage1']) and $_POST['navbarPage1'] != null){
        $navbarPage1 = $_POST['navbarPage1'];
        $navbarPagesArray[] = $navbarPage1;
    }

    if(isset($_POST['navbarPage2']) and $_POST['navbarPage2'] != null){
        $navbarPage2 = $_POST['navbarPage2'];
        $navbarPagesArray[] = $navbarPage2;
    } 

    if(isset($_POST['navbarPage3']) and $_POST['navbarPage3'] != null){
        $navbarPage3 = $_POST['navbarPage3'];
        $navbarPagesArray[] = $navbarPage3;
    } 

    if(isset($_POST['navbarPage4']) and $_POST['navbarPage4'] != null){
        $navbarPage4 = $_POST['navbarPage4'];
        $navbarPagesArray[] = $navbarPage4;
    } 

    if(isset($_POST['navbarPage5']) and $_POST['navbarPage5'] != null){
        $navbarPage5 = $_POST['navbarPage5'];
        $navbarPagesArray[] = $navbarPage5;
    } 

    if(isset($_POST['navbarPage6']) and $_POST['navbarPage6'] != null){
        $navbarPage6 = $_POST['navbarPage6'];
        $navbarPagesArray[] = $navbarPage6;
    } 


    if (isset($_FILES['navbarLogoFile'])) {
        $file = $_FILES['navbarLogoFile'];
        $targetDirectory = 'uploads/'; 

        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        $targetFile = $targetDirectory . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $navbarLogoFile = $targetFile;
            echo "File uploaded successfully.";
            $logoUploaded = true;

        } else {
            // File upload failed
            echo "Error uploading file.";
            // $navbarLogoFile;
        }
    }

    echo $navbarLogoFile;

    $navbar = generateNavbar($websiteName, true, $logoUploaded, $navbarLogoFile, $navbarPagesArray, $buttonChecked, $activeLinkContent, $activeLinkColor, $navbarBackgroundColor, $bodyColor);
    echo $navbar;

    $filePath = "liveExample.txt";

    // Open the file for writing (create if not exists)
    $file = fopen($filePath, "w");

    // Check if the file was opened successfully
    if ($file) {
        // Write variables to the file
        fwrite($file, $navbar . "\n");

        // Close the file
        fclose($file);

        echo "<span class='text-lime-600 font-medium'> Everything saved. </span>";

    } else {
        echo "Unable to open the file for writing.";
    }

}

// if(isset($_POST['create_website'])){

//     if(isset($_POST['website_name']) and $_POST['website_name'] != null){
//         $websiteName = $_POST['website_name'];
//     } else{
//         $websiteName =  'WebyAI';
//     }
    
//     if(isset($_POST['activeLinkContent']) and $_POST['activeLinkContent'] != null){
//         $activeLinkContent = $_POST['activeLinkContent'];
//         $buttonChecked = true;
//     } else{
//         $buttonChecked = false;
//     }
    
//     if(isset($_POST['activeLinkColor']) and $_POST['activeLinkColor'] != null){
//         $activeLinkColor = $_POST['activeLinkColor'];
//     } else{
//         $activeLinkColor = 'blue';
//     }
    
//     if(isset($_POST['navbarBackgroundColor']) and $_POST['navbarBackgroundColor'] != null){
//         $navbarBackgroundColor = $_POST['navbarBackgroundColor'];
//     } else{
//         $navbarBackgroundColor = 'blue';
//     }

//     if(isset($_POST['navbarPage1']) and $_POST['navbarPage1'] != null){
//         $navbarPage1 = $_POST['navbarPage1'];
//         $navbarPagesArray[] = $navbarPage1;
//     }

//     if(isset($_POST['navbarPage2']) and $_POST['navbarPage2'] != null){
//         $navbarPage2 = $_POST['navbarPage2'];
//         $navbarPagesArray[] = $navbarPage2;
//     } 

//     if(isset($_POST['navbarPage3']) and $_POST['navbarPage3'] != null){
//         $navbarPage3 = $_POST['navbarPage3'];
//         $navbarPagesArray[] = $navbarPage3;
//     } 

//     if(isset($_POST['navbarPage4']) and $_POST['navbarPage4'] != null){
//         $navbarPage4 = $_POST['navbarPage4'];
//         $navbarPagesArray[] = $navbarPage4;
//     } 

//     if(isset($_POST['navbarPage5']) and $_POST['navbarPage5'] != null){
//         $navbarPage5 = $_POST['navbarPage5'];
//         $navbarPagesArray[] = $navbarPage5;
//     } 


//     if (isset($_FILES['navbarLogoFile'])) {
//         $file = $_FILES['navbarLogoFile'];
//         $targetDirectory = 'uploads/'; 

//         if (!file_exists($targetDirectory)) {
//             mkdir($targetDirectory, 0777, true);
//         }

//         $targetFile = $targetDirectory . basename($file['name']);
//         if (move_uploaded_file($file['tmp_name'], $targetFile)) {
//             $navbarLogoFile = $targetFile;
//             echo "File uploaded successfully.";
//             $logoUploaded = true;

//         } else {
//             // File upload failed
//             echo "Error uploading file.";
//             // $navbarLogoFile;
//         }
//     }

//     echo $navbarLogoFile;

//     $navbar = generateNavbar($websiteName, true, $logoUploaded, $navbarLogoFile, $navbarPagesArray, $buttonChecked, $activeLinkContent, $activeLinkColor, $navbarBackgroundColor);

//     // File path
//     $filePath = "example.txt";

//     // Open the file for writing (create if not exists)
//     $file = fopen($filePath, "w");

//     // Check if the file was opened successfully
//     if ($file) {
//         // Write variables to the file
//         fwrite($file, $navbar . "\n");

//         // Close the file
//         fclose($file);

//         echo "Variables have been written to the file.";
//     } else {
//         echo "Unable to open the file for writing.";
//     }

// }


?>