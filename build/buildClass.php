<?php

function generateNavbar($websiteName, $includeLogo = false, $logoUploaded = false, $navbarLogoFile, $navbarPage1, $navbarPage2, $navbarPage3, $navbarPage4) {
    $navbarHTML = '<nav class="flex justify-between items-center my-3 p-6">
                        <div class="logo flex justify-between items-center ">';
    
    if($logoUploaded == true){
        $navbarHTML .= '<img src="' . $navbarLogoFile . ' " alt="logo" class="mx-2 w-[60px] rounded-lg">';
    }

    if ($includeLogo) {
        $navbarHTML .= '
            <span class="text-2xl antialiased font-bold">' . $websiteName . '</span>';
    } else {
            $navbarHTML .= '<span class="text-2xl antialiased font-bold"></span>'; 
    }
    
    $navbarHTML .= '</div>

                        <ul class="elements flex justify-between items-center w-[60%] text-xl antialiased font-normal">
                            <li class="opacity-80 hover:opacity-90 transition ease-in-out duration-300">
                                <a href="">'.$navbarPage1.'</a>
                            </li>
                            <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                                <a href="">'.$navbarPage2.'</a>
                            </li>
                            <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                                <a href="">'.$navbarPage3.'</a>
                            </li>
                            <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                                <a href="">'.$navbarPage4.'</a>
                            </li>
                            <li>
                                <a href="build/builder.php" class="text-white py-2 px-10 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">Get started</a>
                            </li>
                        </ul>

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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['website_name'])) {
    
    if(isset($_POST['website_name']) and $_POST['website_name'] != null){
        $websiteName = $_POST['website_name'];
    } else{
        $websiteName =  'WebyAI';
    }

    if(isset($_POST['navbarPage1']) and $_POST['navbarPage1'] != null){
        $navbarPage1 = $_POST['navbarPage1'];
    } else{
        $navbarPage1 =  'Home';
    }

    if(isset($_POST['navbarPage2']) and $_POST['navbarPage2'] != null){
        $navbarPage2 = $_POST['navbarPage2'];
    } else{
        $navbarPage2 =  'About';
    }

    if(isset($_POST['navbarPage3']) and $_POST['navbarPage3'] != null){
        $navbarPage3 = $_POST['navbarPage3'];
    } else{
        $navbarPage3 =  'Contact';
    }

    if(isset($_POST['navbarPage4']) and $_POST['navbarPage4'] != null){
        $navbarPage4 = $_POST['navbarPage4'];
    } else{
        $navbarPage4 =  'Pricing';
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

    $navbar = generateNavbar($websiteName, true, $logoUploaded, $navbarLogoFile, $navbarPage1, $navbarPage2, $navbarPage3, $navbarPage4);
    echo $navbar;
}

?>