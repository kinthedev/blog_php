<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../src/output.css" rel="stylesheet">
    <link href="../src/input.css" rel="stylesheet">
</head>


<body>
    <div class="h-screen w-full flex  justify-center items-center">
        <form class=" flex flex-col items-center gap-5 shadow-3xl px-8 py-12 rounded-xl"
            action="../backend/auth/uploadVideo.php" method="post" enctype="multipart/form-data">
            Select video to upload:
            <div>

                <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Upload
                    video</label>
                <input
                    class="block w-full text-sm px-2 py-1 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                    id="fileToUpload" name="video" type="file" accept="video/*" require>

            </div>

            <textarea class="resize-none w-96 h-40 px-2 py-2 shadow-3xl" rows="2" placeholder="Enter content"
                name="content" id=""></textarea>
            <button type="submit" name="upload"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">Delete</button>
        </form>
    </div>
</body>



</html>