
    <br>
    <br>

    <h4 class="text-2xl font-bold">Let's create a captivating landing page for your website:</h4>
    <br>
    <span class="text-xs opacity-80">A compelling title initiates it all:</span>

    <br>

    <input type="text" name="hero_title" id="heroTitle" class="rounded-lg w-full p-2 border" placeholder="Example: Effortlessly create modern website with zero code." required>

    <br>
    
    <span class="text-xs opacity-80 mt-1">Choose text color:</span>

    <br>

    <input type="color" name="hero_title_color" id="heroTitleColor" class="rounded-lg w-1/6 h-12" value="#000000">
    <br>
    <br>

    <span class="text-xs opacity-80 mt-1">Add a background image:</span>
    <br>
    <input class="border w-full rounded-lg" type="file" name="heroBackgroundImg" id="heroBackgroundImg">

    <br>
    <br>

    <span class="text-xs opacity-80 mt-1">Add your description:</span>
    <br>
    <textarea class="border w-full rounded-lg" rows="4" name="heroBackgroundDesc" id="heroBackgroundDesc"></textarea>

</form>

<script>

    var heroTitle = document.getElementById('heroTitle');
    var heroTitleColor = document.getElementById('heroTitleColor');
    var heroBackgroundImg = document.getElementById('heroBackgroundImg');
    var heroBackgroundDesc = document.getElementById('heroBackgroundDesc');

    heroTitle.addEventListener('input', function(event) {
        if (event.target.tagName === 'INPUT') {
            submitForm();
        }
    });

    heroTitleColor.addEventListener('input', function(event) {
        submitForm();
    });

    heroBackgroundImg.addEventListener('change', function() {
        submitForm();
    });

    heroBackgroundDesc.addEventListener('change', function() {
        submitForm();
    });

</script>

