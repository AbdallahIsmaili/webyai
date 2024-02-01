<?php

$navbarPagesArray = [];

function generateNavbar($websiteName, $includeLogo = false, $logoUploaded = false, $navbarLogoFile, $navbarPagesArray, $buttonChecked = false,  $activeLinkContent, $activeLinkColor, $navbarBackgroundColor, $bodyColor, $websiteNameColor, $navbarPageTextColor, $activeLinkContentTextColor) {
    
    $navbarHTML = '<nav style="background:'. $navbarBackgroundColor .';" class="flex justify-between items-center p-4 xl:mb-3 xl:p-6">
                        <div class="logo flex justify-between items-center ">';
    
    if ($logoUploaded == true) {
        $navbarHTML .= '<img src="' . $navbarLogoFile . ' " alt="logo" class="mx-2 w-[40px] rounded-lg">';
    }

    if ($includeLogo) {
        $navbarHTML .= '
            <span style="color:'. $websiteNameColor .';" class="text-xl antialiased font-extrabold">' . $websiteName . '</span>';
    } else {
        $navbarHTML .= '<span class="text-xl antialiased font-extrabold"></span>'; 
    }
    
    $navbarHTML .= '</div>';

    if(!empty($navbarPagesArray)){

        $navbarHTML .= '<ul class="xl:flex lg:flex md:flex xl:justify-between lg:justify-between md:justify-between xl:items-center lg:items-center md:items-center hidden w-[75%] xl:w-[50%] xl:text-md md:text-sm antialiased font-normal">';

        foreach ($navbarPagesArray as $navbarPage) {
            $navbarHTML .= '<li class="opacity-80 hover:opacity-90 transition ease-in-out duration-300">
                                <a style="color: '. $navbarPageTextColor .';" href="" class="font-medium">'.$navbarPage.'</a>
                            </li>';
        }


        if($buttonChecked){

            $navbarHTML .= '
                    <li>
                        <a style="background: '. $activeLinkColor .'; color: '. $activeLinkContentTextColor .' ;" href="build/builder.php" class="text-white xl:py-3 lg:py-3 py-2 xl:px-12 lg:px-10 px-8 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">'.$activeLinkContent.'</a>
                    </li>';
        }

        $navbarHTML .= ' </ul> <i class="text-white sm:block xl:hidden lg:hidden md:hidden py-2 xl:px-12 lg:px-10 px-8 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">More</i>';
    }

    if($buttonChecked and empty($navbarPagesArray)){

        $navbarHTML .= '
                
                    <a style="background: '. $activeLinkColor .';" href="build/builder.php" class="text-white xl:py-3 lg:py-3 py-2 xl:px-12 lg:px-10 px-8 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">'.$activeLinkContent.'</a>
                ';
    }

    $navbarHTML .= '</nav>';
    
    $navbarHTML .= '<style>
    
                        body{
                            background: '. $bodyColor .';
                        }

                    </style>';
    
    return $navbarHTML;
}


function generateHero($heroTitle, $heroTitleColor, $heroBackgroundImg, $heroBackgroundDesc){
    
    $displayTitle = ($heroTitle !== null) ? $heroTitle : "Default Title";
    $displayDesc = ($heroBackgroundDesc !== null) ? $heroBackgroundDesc : "Unleash your creativity with our intuitive website builder! Craft personalized <span class='text-blue-800'> Landing pages, E-commerce sites, Blogs, and Portfolios effortlessly </span>, powered by Tailwind CSS for a seamless online presence.";

    $heroHTML = '<div class="w-full mb-2 p-8 bg-cover bg-center" style="background-image: url('. $heroBackgroundImg .');">
        
        <div class="xl:mx-40 lg:mx-24 md:mx-16 sm:mx-16 mx-8 xl:mt-24 lg:mt-20 mt-20 text-center max-w-[1280px]">
            <h1 style="color: '. $heroTitleColor .' !important" class="xl:text-7xl lg:text-7xl md:text-6xl sm:text-6xl text-5xl font-extrabold">' . $displayTitle . '</h1>
            <p class="xl:mx-52 lg:mx-36 md:mx-20 sm:mx-20 mx-12 mt-4 mb-12 xl:font-medium lg:text-sm md:text-sm sm:text-sm text-xs opacity-80">'. $displayDesc .'</p>

            <div class="xl:m-8 lg:m-8 md:m-8 m-6">
                <button class="xl:py-3 lg:py-3 py-2 xl:px-10 lg:px-8 md:px-6 sm:px-6 px-4 rounded-lg bg-black text-white hover:opacity-80 transition ease-in-out duration-500"> <a href=" class="font-medium xl:text-md lg:text-md md:text-sm sm:text-sm text-xs">Build Effortlessly Now</a> </button>

                <button class="xl:mx-10 lg:mx-10 md:mx-8 sm:mx-6 text-black hover:underline hover:underline-offset-2 transition ease-in-out duration-300"> <a href=" class="font-medium xl:text-md lg:text-md md:text-sm sm:text-sm text-xs">Exploring?</a> </button>

            </div>

        </div>

    </div>';

    return $heroHTML;

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
$websiteNameColor = null;
$navbarPageTextColor = null;
$activeLinkContentTextColor = null;
$activeLinkContentTextColor = null;


$heroTitle = null;
$heroTitleColor = null;
$heroBackgroundImg = null;
$heroBackgroundDesc = null;

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
    
    if(isset($_POST['website_name_color']) and $_POST['website_name_color'] != null){
        $websiteNameColor = $_POST['website_name_color'];
    }
    
    if(isset($_POST['navbarPageTextColor']) and $_POST['navbarPageTextColor'] != null){
        $navbarPageTextColor = $_POST['navbarPageTextColor'];
    }
    
    if(isset($_POST['activeLinkContentTextColor']) and $_POST['activeLinkContentTextColor'] != null){
        $activeLinkContentTextColor = $_POST['activeLinkContentTextColor'];
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


    /// HERO ///


    if(isset($_POST['hero_title']) and $_POST['hero_title'] != null){
        $heroTitle = $_POST['hero_title'];
    } 

    if(isset($_POST['hero_title_color']) and $_POST['hero_title_color'] != null){
        $heroTitleColor = $_POST['hero_title_color'];
    } 

    if(isset($_POST['heroBackgroundDesc']) and $_POST['heroBackgroundDesc'] != null){
        $heroBackgroundDesc = $_POST['heroBackgroundDesc'];
    } 

    if (isset($_FILES['heroBackgroundImg'])) {
        $file = $_FILES['heroBackgroundImg'];
        $targetDirectory = 'uploads/'; 

        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        $targetFile = $targetDirectory . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $heroBackgroundImg = $targetFile;
            echo "File uploaded successfully.";
            $logoUploaded = true;

        } else {
            echo "Error uploading file.";
        }
    }

    $navbar = generateNavbar($websiteName, true, $logoUploaded, $navbarLogoFile, $navbarPagesArray, $buttonChecked, $activeLinkContent, $activeLinkColor, $navbarBackgroundColor, $bodyColor, $websiteNameColor, $navbarPageTextColor, $activeLinkContentTextColor);
    echo $navbar;

    $hero = generateHero($heroTitle, $heroTitleColor, $heroBackgroundImg, $heroBackgroundDesc);
    echo $hero;

    $filePath = "liveExample.txt";

    // Open the file for writing (create if not exists)
    $file = fopen($filePath, "w");

    // Check if the file was opened successfully
    if ($file) {
        // Write variables to the file
        fwrite($file, $navbar . "\n" . $hero);

        // Close the file
        fclose($file);

        echo "<span class='text-lime-600 font-medium'> Everything saved. </span>";

    } else {
        echo "Unable to open the file for writing.";
    }

}


?>