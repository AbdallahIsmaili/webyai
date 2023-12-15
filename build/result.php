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
<body class="container mx-auto max-w-[1280px]">

<div id="fileContent" class="">

</div>

<script>
    // Function to refresh the content of the text file
    function refreshContent() {
        const filename = 'liveExample.txt';
        const fileContentElement = document.getElementById('fileContent');

        // Fetch the content of the text file
        fetch(filename)
            .then(response => response.text())
            .then(content => {
                fileContentElement.innerHTML = content;
            })
            .catch(error => {
                console.error('Error fetching file content:', error);
            });
    }

    setInterval(refreshContent, 500);

</script>
    
</body>
</html>