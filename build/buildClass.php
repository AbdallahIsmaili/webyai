<?php
function generateNavbar($websiteName, $includeLogo = false, $logoUploaded = false, $navbarLogoFile) {
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

                        <ul class="elements flex justify-between items-center w-[50%] text-xl antialiased font-normal">
                            <li class="opacity-80 hover:opacity-90 transition ease-in-out duration-300">
                                <a href="">Home</a>
                            </li>
                            <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                                <a href="">About</a>
                            </li>
                            <li class="opacity-70 hover:opacity-90 transition ease-in-out duration-300">
                                <a href="">Builder</a>
                            </li>
                            <li>
                                <a href="build/builder.php" class="text-white py-3 px-12 bg-gray-900 rounded-lg hover:bg-gray-700 transition ease-in-out duration-500">Get started</a>
                            </li>
                        </ul>

                    </nav>';

    return $navbarHTML;
}

// Example usage:


$websiteName = "Your Website";
$navbarLogoFile = 'webyai_logo.png';
$logoUploaded = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['website_name'])) {
    
    if(isset($_POST['website_name']) and $_POST['website_name'] != null){
        $websiteName = $_POST['website_name'];
    } else{
        $websiteName =  'WebyAI';
    }

    // Check if 'navbarLogoFile' is set in the $_POST array
    // $navbarLogoFile = isset($_POST['navbarLogoFile']) ? $_POST['navbarLogoFile'] : 'webyai_logo.png';

    // Check if 'navbarLogoFile' is set in the $_FILES array
    if (isset($_FILES['navbarLogoFile'])) {
        $file = $_FILES['navbarLogoFile'];
        $targetDirectory = 'uploads/'; // Specify your target directory

        // Create the target directory if it doesn't exist
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        // Move the uploaded file to the target directory
        $targetFile = $targetDirectory . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            // File upload successful
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
    
    // The form was submitted, and website_name field is set
    // You can add more conditions based on other form fields if needed
    $navbar = generateNavbar($websiteName, true, $logoUploaded, $navbarLogoFile);
    echo $navbar;
}

?>