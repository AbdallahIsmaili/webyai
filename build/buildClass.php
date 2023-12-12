<?php

$navbarPagesArray = [];

function generateNavbar($websiteName, $includeLogo = false, $logoUploaded = false, $navbarLogoFile, $navbarPagesArray, $buttonChecked = false,  $activeLinkContent, $activeLinkColor, $navbarBackgroundColor) {
    $navbarHTML = '<nav style="background:'. $navbarBackgroundColor .';" class="flex justify-between items-center my-1 p-4 rounded-lg">
                        <div class="logo flex justify-between items-center ">';
    
    if ($logoUploaded == true) {
        $navbarHTML .= '<img src="' . $navbarLogoFile . ' " alt="logo" class="mx-2 w-[60px] rounded-lg">';
    }

    if ($includeLogo) {
        $navbarHTML .= '
            <span class="text-2xl antialiased font-bold">' . $websiteName . '</span>';
    } else {
        $navbarHTML .= '<span class="text-2xl antialiased font-bold"></span>'; 
    }
    
    $navbarHTML .= '</div>

                        <ul class="elements flex justify-between items-center w-[60%] text-lg antialiased font-normal">';

    foreach ($navbarPagesArray as $navbarPage) {
        $navbarHTML .= '<li class="opacity-80 hover:opacity-90 transition ease-in-out duration-300">
                            <a href="">'.$navbarPage.'</a>
                        </li>';
    }


    if($buttonChecked){

        $navbarHTML .= '
                <li>
                    <a style="background: '. $activeLinkColor .';" href="build/builder.php" class="text-white py-2 px-10 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">'.$activeLinkContent.'</a>
                </li>';
    }

    $navbarHTML .= ' </ul>
        </nav>';

    
    return $navbarHTML;
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
$activeLinkContent = 'Get started';
$activeLinkColor = null;
$navbarBackgroundColor = null;

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
    } else{
        $navbarBackgroundColor = 'blue';
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

    $navbar = generateNavbar($websiteName, true, $logoUploaded, $navbarLogoFile, $navbarPagesArray, $buttonChecked, $activeLinkContent, $activeLinkColor, $navbarBackgroundColor);
    echo $navbar;
}

?>