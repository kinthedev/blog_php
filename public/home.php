<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="../src/output.css" rel="stylesheet">
    <link href="../src/input.css" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>
<?php
session_start();
include_once __DIR__ . "/../backend/auth/getPost.php";
include_once __DIR__ . "/../backend/auth/getAvatar.php";



if (!isset($_SESSION['username'])) {
    header("Location: ../frontend/login.php");
    exit();
}

$targetVideo = '../backend/videos/';
$targetFile = '../backend/photos/';

?>

<body class="pt-[55px] bg-[#F2F4F7]">
    <!-- navbar -->
    <div class="fixed top-0 z-111 flex items-center justify-between w-full h-[55px] bg-[#ffffff] shadow-md px-5 py-2">
        <div class="flex flex-1/3   ">
            <a href="./home.php" class="">
                <img class="w-11 h-11" src="./assets/logo.png" alt="">
            </a>
            <div class="relative w-full ms-2">
                <input class="bg-[#F0F2F5] w-60 h-full rounded-3xl px-8 outline-none " type="text"
                    placeholder="Search on BoBo">
                <span class="absolute text-[#66696D] left-3 top-1/2 -translate-y-[40%] ">
                    <i class='bx bx-search '></i>
                </span>
            </div>
        </div>
        <div class="flex w-full items-center justify-center gap-2.5 text-[#66696D] ">

            <a class=" px-10 py-2 rounded-xl hover:bg-[#F2F2F2] " href="./home.php">
                <i class='bx bx-home text-3xl active'></i>
            </a>
            <a class=" px-10 py-2 rounded-xl hover:bg-[#F2F2F2]" href="">
                <i class='bx bx-group text-3xl'></i>
            </a>
            <a class=" px-10 py-2 rounded-xl hover:bg-[#F2F2F2]" href="../frontend/watch.php">
                <i class="bx bx-movie-play text-3xl"></i>
            </a>
            <a class=" px-10 py-2 rounded-xl hover:bg-[#F2F2F2]" href="">
                <i class='bx bx-joystick-alt text-3xl'></i>
            </a>

        </div>
        <div class="flex flex-1/3 items-center justify-end gap-2 ">
            <div class="relative w-10 h-10 bg-[#E2E5E9] hover:bg-[#D6D9DD] rounded-full cursor-pointer">
                <i class="bx bxs-bell text-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 "></i>
            </div>
            <div class="relative w-10 h-10 bg-[#E2E5E9] hover:bg-[#D6D9DD] rounded-full cursor-pointer">
                <i class="bx bxs-cog  text-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></i>
            </div>
            <div class=" w-10 h-10 rounded-full cursor-pointer">
                <img class=" object-cover w-full h-full  rounded-full"
                    src="../backend/avatar/<?php echo $avatar["avatar"]  ?>" alt="">
            </div>
            <div class="relative w-10 h-10 bg-[#E2E5E9] hover:bg-[#D6D9DD] rounded-full cursor-pointer">
                <a href="../backend/auth/auth_logout.php"> <i
                        class='bx bxs-plane-take-off text-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2'></i></a>
            </div>
        </div>
    </div>
    <!-- divide body into 3 parts -->
    <div class=" flex justify-around ">
        <!-- side left -->
        <div class="scroll-custom scroll-custom-left w-[360px] select-none">
            <div class="visible pt-5 w-[350px] h-screen text-[#66696D]">
                <div class=" pt-2 pl-2 ">
                    <!-- profile -->

                    <a href="../frontend/profile/profile.php"
                        class="flex items-center gap-2 hover:bg-[#E6E8EA]  cursor-pointer px-2 py-2 rounded-md">
                        <div class=" w-10 h-10   rounded-full ">
                            <img class=" object-cover w-full h-full rounded-full"
                                src="../backend/avatar/<?php echo $avatar["avatar"]  ?>" alt="">
                        </div>
                        <div class="">
                            <p class="text-center font-semibold"><?php echo $_SESSION["username"] ?></p>
                        </div>

                    </a>
                    <!--Shortcut Messenger -->
                    <a href=""
                        class="flex items-center cursor-pointer gap-3 hover:bg-[#E6E8EA] hover:text-[#1B4590] px-3 py-3  rounded-md">
                        <i class='bx bxs-paper-plane text-3xl'></i>
                        <div class="p-0.5">
                            <p class="text-center font-semibold">Messenger</p>
                        </div>
                    </a>
                    <!--Shortcut Friends -->
                    <a href=""
                        class="flex items-center cursor-pointer gap-3 hover:bg-[#E6E8EA] hover:text-[#1B4590] px-3 py-3 rounded-md">
                        <i class='bx bxs-group text-3xl'></i>
                        <div class="p-0.5">
                            <p class="text-center font-semibold">Friends</p>
                        </div>
                    </a>
                    <!--Shortcut videos -->
                    <a href=""
                        class="flex items-center cursor-pointer gap-3 hover:bg-[#E6E8EA] hover:text-[#1B4590] px-3 py-3 rounded-md">
                        <i class='bx bxs-slideshow text-3xl '></i>
                        <div class="p-0.5">
                            <p class="text-center font-semibold">Videos</p>
                        </div>
                    </a>
                    <!--Shortcut games-->
                    <a href=""
                        class="flex items-center cursor-pointer gap-3 hover:bg-[#E6E8EA] hover:text-[#1B4590] px-3 py-3 rounded-md">
                        <i class='bx bxs-joystick text-3xl'></i>
                        <div class="p-0.5">
                            <p class="text-center font-semibold">Games</p>
                        </div>
                    </a>
                    <!--Shortcut Map-->
                    <a href=""
                        class="flex items-center cursor-pointer gap-3 hover:bg-[#E6E8EA] hover:text-[#1B4590] px-3 py-3 rounded-md">
                        <i class='bx bxs-map text-3xl'></i>
                        <div class="p-0.5">
                            <p class="text-center font-semibold">Locations</p>
                        </div>
                    </a>
                    <!-- shortcut chat with AI -->
                    <a href=""
                        class="flex items-center cursor-pointer gap-3 hover:bg-[#E6E8EA] hover:text-[#1B4590] px-3 py-3 rounded-md">
                        <i class='bx bx-brain text-3xl'></i>
                        <div class="p-0.5">
                            <p class="text-center font-semibold ">Chat with AI</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- in the middle -->
        <div class="relative h-screen w-[590px]  pt-5">
            <!-- create post -->
            <div class="flex flex-col justify-between h-32 bg-white rounded-xl select-none shadow-3xl px-4 py-3 ">
                <div class="flex gap-3">
                    <div class="relative flex-none w-[40px] h-[40px] rounded-full cursor-pointer">
                        <img class="absolute object-cover w-[40px] h-[40px]  rounded-full"
                            src="../backend/avatar/<?php echo $avatar["avatar"]  ?>" alt="">

                    </div>
                    <a href="../frontend/createPost.php" class="grow">
                        <div
                            class="bg-[#e7eaef] hover:bg-[#E4E6E9] w-full h-full cursor-pointer rounded-3xl px-8 outline-none text-[#7A7D81] font-semibold pt-2">
                            What's on your mind?
                        </div>
                    </a>

                </div>
                <div class="flex text-[#66696D]">
                    <a href="../frontend/createPost.php"
                        class="flex items-center cursor-pointer gap-1 hover:bg-[#E6E8EA] hover:text-[#1B4590] px-3 py-3  rounded-md">
                        <i class='bx bxs-camera text-2xl'></i>
                        <div class="p-0.5">
                            <p class="text-center font-semibold">Photo</p>
                        </div>
                    </a>
                    <a href="../frontend/createVideo.php"
                        class="flex items-center cursor-pointer gap-1 hover:bg-[#E6E8EA] hover:text-[#1B4590] px-3 py-3  rounded-md">
                        <i class='bx bxs-video text-2xl'></i>
                        <div class="p-0.5">
                            <p class="text-center font-semibold">Video</p>
                        </div>
                    </a>
                </div>

            </div>
            <!-- Stories -->
            <div class="relative overflow-y-scroll  select-none py-2 " id="story">
                <div class=" flex   gap-2 py-2  " id="slider">
                    <!-- Stories user -->

                    <div
                        class="relative shadow-3xl flex-none hover:brightness-90 h-52 w-32 rounded-xl overflow-hidden cursor-pointe ">
                        <img class="hover:scale-110 rounded-t-xl h-38   object-cover " src="../public/assets/user.jpg"
                            alt="">
                        <div class="absolute z-1 bottom-0 bg-white w-full h-14 rounded-b-xl">
                            <div
                                class="relative bg-white w-[39px] h-[39px] rounded-full -top-[20px] left-1/2 -translate-x-1/2 ">
                                <i
                                    class='absolute bx bxs-plus-circle text-[#465BCE] text-4xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2'></i>
                            </div>
                        </div>

                    </div>
                    <div
                        class="shadow-3xl flex-none hover:brightness-90 h-52 w-32 rounded-xl overflow-hidden cursor-pointer  ">
                        <img class="hover:scale-110 rounded-xl h-full object-center  object-cover "
                            src="../public/assets/anh-mo-ta.jpg" alt="">
                    </div>
                    <div
                        class="shadow-3xl flex-none hover:brightness-90 h-52 w-32 rounded-xl overflow-hidden cursor-pointer ">
                        <img class="hover:scale-110 rounded-xl h-full object-center object-cover "
                            src="../public/assets/anh-gai-xinh.jpg" alt="">
                    </div>




                    <div
                        class="shadow-3xl flex-none hover:brightness-90 h-52 w-32 rounded-xl overflow-hidden cursor-pointer ">
                        <img class="hover:scale-110 rounded-xl h-full object-center object-cover "
                            src="../public/assets/anh-gai-xinh.jpg" alt="">
                    </div>
                    <div
                        class="shadow-3xl flex-none hover:brightness-90 h-52 w-32 rounded-xl overflow-hidden cursor-pointer ">
                        <img class="hover:scale-110 rounded-xl h-full object-center object-cover "
                            src="../public/assets/anh-gai-xinh.jpg" alt="">
                    </div>
                    <div
                        class="shadow-3xl flex-none hover:brightness-90 h-52 w-32 rounded-xl overflow-hidden cursor-pointer ">
                        <img class="hover:scale-110 rounded-xl h-full object-center object-cover "
                            src="../public/assets/anh-gai-xinh.jpg" alt="">
                    </div>

                    <div
                        class="shadow-3xl flex-none hover:brightness-90 h-52 w-32 rounded-xl overflow-hidden cursor-pointer ">
                        <img class="hover:scale-110 rounded-xl h-full object-center object-cover "
                            src="../public/assets/anh-gai-xinh.jpg" alt="">
                    </div>


                </div>

            </div>



            <!-- loop posts -->
            <?php foreach (array_reverse($rows) as $row) {
                // echo $row['id'];

                // posts
                echo '<div class="min-h-[100px] w-full bg-white rounded-xl shadow-3xl mb-4">';
                // poster
                echo '<div class="flex px-4 pt-3 mb-2">';
                echo '<img class="object-cover w-[40px] h-[40px] rounded-full"  src="../backend/avatar/' . $row["avatar"] . '">';
                echo '<div class="ml-2 w-full flex items-start justify-between">';
                echo '<div class="-top-1">';
                echo '<h1 class="text-sm font-semibold">' . $row["username"] . '</h1>';
                echo '<p class="text-xs text-[#84878A] font-semibold">' . $row["created_at"] . '</p>';
                echo '</div>';
                echo '<div class="relative h-10 w-10 hover:bg-[#F2F2F2] cursor-pointer rounded-full">';
                echo '<i class="menu-toggle absolute bx bx-dots-horizontal-rounded text-2xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 "></i> ';
                //delete post box 
                echo ' <div class="menu-box hidden top-10 " > 
                <div class="  w-[334px]  mx-auto select-none py-2">
                <div class="  cursor-pointer  ">
                    <div class="flex gap-2 bg-[#ffffff] p-2 rounded-xl hover:bg-[#F2F2F2]">
                        <i class="bx bxs-pencil text-2xl" ></i>
                        <div class="flex flex-col ">
                            <span class="font-semibold"> Edit post</span>
                            <span class="text-sm">This post will be edited </span>

                        </div>
                    </div>';


                if ($row["userid"] == $_SESSION["id"]) {
                    echo ' <a href="../frontend/deletePost.php?idPost=' . $row['id'] . '&imageUrl=' . $row['image'] . '&content=' . $row['content'] . '" class="flex gap-2 bg-[#ffffff] p-2 rounded-xl hover:bg-[#F2F2F2]">
                        <i class="bx bxs-trash text-2xl"></i>
                        <div class="flex flex-col ">
                            <span class="font-semibold"> Delete post</span>
                            <span class="text-sm">This post will be permanently deleted </span>

                        </div>
                    </a>';
                }


                echo '</div>';
                echo '</div>';

                echo '</div>';


                //space    

                echo '</div>';
                echo '</div>';
                echo '</div>';
                // description
                echo '<div class="min-h-[20px] w-full px-4 mb-3">';
                echo '<p>' . $row["content"] . '</p>';
                echo '</div>';
                if (pathinfo($row['image'], PATHINFO_EXTENSION) === "mp4") {  //videos
                    echo '<video class="w-full h-full"  controls>
                    <source src="' . $targetVideo . $row['image'] . '" type="video/mp4">
                    </video>';
                } else {
                    // picture

                    echo '<div class="w-full h-full">
                <img class="object-cover w-full" 
                src="' . $targetFile . $row['image'] . '" alt="">
                    </div>';
                }



                echo '<div class="px-3 py-1">';
                echo '<div class="flex justify-between w-full">';
                echo '<div class="flex items-center justify-center gap-2 flex-1/3 py-1 hover:bg-[#F2F2F2] rounded-md text-[#84878A] cursor-pointer">';
                echo '<i class="bx bx-like text-xl text-[#84878A]"></i>';
                echo '<span class="font-semibold">Like</span>';
                echo '</div>';

                echo '<div class="flex items-center justify-center gap-2 flex-1/3 py-1 hover:bg-[#F2F2F2] rounded-md text-[#84878A] cursor-pointer">';
                echo '<i class="bx bx-message bx-flip-horizontal text-xl"></i>';
                echo '<span class="font-semibold">Comment</span>';
                echo '</div>';

                echo '<div class="flex items-center justify-center gap-2 flex-1/3 py-1 hover:bg-[#F2F2F2] rounded-md text-[#84878A] cursor-pointer">';
                echo '<i class="bx bx-share bx-flip-horizontal text-xl"></i>';
                echo '<span class="font-semibold">Share</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                echo '</div>';
            } ?>
        </div>

        <!-- side right -->
        <div class="scroll-custom scroll-custom-right w-[360px] ">
            <div class="visible pt-7 pl-5 h-screen w-[350px]">
                <!-- Friends Online -->
                <h3 class="text-lg font-semibold text-gray-700 mb-3">Friends Online</h3>
                <ul class="select-none">
                    <li class="flex items-center gap-2 relative cursor-pointer hover:bg-[#eaedf1] px-3 py-3 rounded-xl">

                        <div class="w-8 h-8 rounded-full ">
                            <img class="outline-2 outline-offset-2 outline-[#465BCE] object-cover w-full h-full rounded-full"
                                src="./assets/anh-gai-xinh.jpg" alt="">
                        </div>

                        <span
                            class="absolute left-8 bottom-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                        <p class="text-sm text-gray-800 font-semibold">Trần Đức Bình</p>
                    </li>
                    <li class="flex items-center gap-2 relative cursor-pointer hover:bg-[#eaedf1] px-3 py-3 rounded-xl">

                        <div class="w-8 h-8 rounded-full ">
                            <img class="outline-2 outline-offset-2 outline-[#465BCE] object-cover w-full h-full rounded-full"
                                src="./assets/anh-gai-xinh.jpg" alt="">
                        </div>

                        <span
                            class="absolute left-8 bottom-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                        <p class="text-sm text-gray-800 font-semibold">Trần Đức Bình</p>
                    </li>
                    <li class="flex items-center gap-2 relative cursor-pointer hover:bg-[#eaedf1] px-3 py-3 rounded-xl">

                        <div class="w-8 h-8 rounded-full ">
                            <img class="outline-2 outline-offset-2 outline-[#465BCE] object-cover w-full h-full rounded-full"
                                src="./assets/anh-gai-xinh.jpg" alt="">
                        </div>

                        <span
                            class="absolute left-8 bottom-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                        <p class="text-sm text-gray-800 font-semibold">Trần Đức Bình</p>
                    </li>
                    <li class="flex items-center gap-2 relative cursor-pointer hover:bg-[#eaedf1] px-3 py-3 rounded-xl">

                        <div class="w-8 h-8 rounded-full ">
                            <img class="outline-2 outline-offset-2 outline-[#465BCE] object-cover w-full h-full rounded-full"
                                src="./assets/anh-gai-xinh.jpg" alt="">
                        </div>

                        <span
                            class="absolute left-8 bottom-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                        <p class="text-sm text-gray-800 font-semibold">Trần Đức Bình</p>
                    </li>
                    <li class="flex items-center gap-2 relative cursor-pointer hover:bg-[#eaedf1] px-3 py-3 rounded-xl">

                        <div class="w-8 h-8 rounded-full ">
                            <img class="outline-2 outline-offset-2 outline-[#465BCE] object-cover w-full h-full rounded-full"
                                src="./assets/anh-gai-xinh.jpg" alt="">
                        </div>

                        <span
                            class="absolute left-8 bottom-1 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                        <p class="text-sm text-gray-800 font-semibold">Trần Đức Bình</p>
                    </li>

                </ul>
            </div>
        </div>


    </div>
    <script src="./script.js"></script>
</body>


</html>