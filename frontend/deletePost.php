<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../src/output.css" rel="stylesheet">
    <link href="../src/input.css" rel="stylesheet">
</head>
<?php
include_once __DIR__ . "/../backend/auth/auth_deletePost.php";
$idPost = $_GET['idPost'];
$imageUrl = $_GET['imageUrl'];
$content = $_GET['content'];
$file_extension = pathinfo($imageUrl, PATHINFO_EXTENSION);
if ($file_extension == 'mp4') {

    $targetFile = '../backend/videos/' . $imageUrl;
} else {
    $targetFile = '../backend/photos/' . $imageUrl;
}
echo $idPost;
echo $targetFile;
?>

<body>
    <div class=" w-full flex  justify-center items-center">
        <form class=" flex flex-col items-center gap-5 shadow-3xl px-8 py-12 rounded-xl"
            action="../backend/auth/auth_deletePost.php?idPost=<?php echo $idPost ?> " method="post"
            enctype="multipart/form-data">
            Do you want to delete this post?
            <div>


                <img class="m-3" id="preview" src="<?php echo $targetFile ?>" alt="Image Preview"
                    style="max-width:200px">

            </div>

            <textarea class="resize-none w-96 h-40 px-2 py-2 shadow-3xl" rows="2" placeholder="Enter content"
                name="content" id=""><?php echo $content ?>
            </textarea>
            <button type="submit" name="delete"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">Delete</button>
        </form>
    </div>
</body>



</html>