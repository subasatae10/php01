<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaisyUI Form Example</title>
    
    <!-- Include daisyUI CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.10.5/dist/full.css" rel="stylesheet">
</head>
<body>
    <?php 
    $s = "jj";
    $a = "aas";
    $k = "613021101-9";
    $id_card = 123456789+555617;

    
    
    ?>
    <div class="p-10">
        <form class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">First Name</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="firstname" name="firstname" placeholder="Enter your first name" value="<?php 
                echo "$s";
                ?>">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">Last Name</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="lastname" name="lastname" placeholder="Enter your last name" value="<?php 
                echo "$a";?>">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="idcard">ID Card Number</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="idcard" name="idcard" placeholder="Enter your ID card number"value="<?php 
                echo "$id_card";
                ?>">
            </div>
            <div class="text-center">
                <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <?php echo'
    <div class="p-10">
        <form class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">First Name</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="firstname" name="firstname" placeholder="Enter your first name" value="'.$s.'"
                >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">Last Name</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="lastname" name="lastname" placeholder="Enter your last name" value="'.$a.'">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="idcard">ID Card Number</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="idcard" name="idcard" placeholder="Enter your ID card number" value="'.$k.'">
            </div>
            <div class="text-center">
                <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800" type="submit">Submit</button>
            </div>
        </form>
    </div> ';
    ?>

</body>
</html>
