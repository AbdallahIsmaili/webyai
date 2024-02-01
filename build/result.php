<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web by AI</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

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
<body >

<div id="fileContent" class=" mx-auto ">

</div>

<script>
    // Function to check if the file is empty
    function isFileEmpty(content) {
        return content.trim() === '';
    }

    // Function to refresh the content of the HTML file
    function refreshContent() {
        const filename = 'liveExample.txt';
        const fileContentElement = document.getElementById('fileContent');

        // Fetch the content of the HTML file
        fetch(filename)
            .then(response => response.text())
            .then(content => {
                if (isFileEmpty(content)) {
                    fileContentElement.innerHTML = '';

                } else {
                    fileContentElement.innerHTML = content;
                }
            })
            .catch(error => {
                console.error('Error fetching file content:', error);
            });
    }

    // Set interval to refresh the content every 1.5 seconds (1500 milliseconds)
    setInterval(refreshContent, 300);

</script>
    
</body>
</html>