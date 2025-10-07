<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="../../src/output.css" rel="stylesheet">
    <link href="../../src/input.css" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>
<?php
session_start();
include_once __DIR__ . "/../../backend/auth/getPost.php";
include_once __DIR__ . "/../../backend/auth/getAvatar.php";

$targetVideo = "../../backend/videos/";
?>

<body>
    <!-- navbar -->
    <div class="fixed top-0 z-111 flex items-center justify-between w-full h-[55px] bg-[#ffffff] shadow-md px-5 py-2">
        <div class="flex flex-1/3   ">
            <a href="../../public/home.php" class="">
                <img class="w-11 h-11" src="../../public/assets/logo.png" alt="">
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

            <a class=" px-10 py-2 rounded-xl hover:bg-[#F2F2F2]" href="../../public/home.php">
                <i class='bx bx-home text-3xl'></i>
            </a>
            <a class=" px-10 py-2 rounded-xl hover:bg-[#F2F2F2]" href="">
                <i class='bx bx-group text-3xl'></i>
            </a>
            <a class=" px-10 py-2 rounded-xl hover:bg-[#F2F2F2]" href="../../frontend/watch">
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
                    src="../../backend/avatar/<?php echo $avatar["avatar"]  ?>" alt="">
            </div>
            <div class="relative w-10 h-10 bg-[#E2E5E9] hover:bg-[#D6D9DD] rounded-full cursor-pointer">
                <a href="../../backend/auth/auth_logout.php"> <i
                        class='bx bxs-plane-take-off text-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2'></i></a>
            </div>
        </div>
    </div>
    <!-- header -->
    <div class="shadow-cs">
        <!-- profile image -->
        <div class="pt-[55px]">
            <div class="flex justify-center">
                <div
                    class="relative  w-9/12 h-[404px] rounded-xl shadow-xl  bg-gradient-to-b from-[#E6E8EA] from-80% to-[#8C8E8F] ">
                    <div
                        class="absolute flex justify-center items-center gap-2 bg-[#FFFFFF] px-2 h-9 rounded-xl bottom-4 right-8 select-none cursor-pointer hover:bg-[#F2F2F2]">
                        <i class='bx bxs-camera text-xl'></i>
                        <p class="font-semibold">
                            Add cover photo
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex relative justify-center items-center w-full pb-4">
                <div class="relative  flex justify-end w-[1024px]  h-28 ">
                    <div class="absolute bottom-0 left-0  w-44 h-44 rounded-full border-4 border-white ">

                        <?php if (!$avatar) { ?>
                            <a href="../changeAvatar.php"><img
                                    class=" w-full h-full object-cover  rounded-full  cursor-pointer hover:brightness-75 "
                                    src="../../public/assets/user.jpg" alt=""></a>
                        <?php } else { ?>
                            <a href="../changeAvatar.php"><img
                                    class=" w-full h-full object-cover  rounded-full  cursor-pointer hover:brightness-75 "
                                    src="../../backend/avatar/<?php echo $avatar["avatar"] ?>" alt=""></a>
                        <?php } ?>
                    </div>
                    <div class="flex  w-[840px] ">
                        <div class="mt-5">
                            <h1 class="text-3xl font-bold"><?php echo $_SESSION["username"] ?></h1>
                        </div>

                    </div>

                </div>
                <div class="absolute bottom-0 bg-[#E5E7E9] h-px w-[1024px] "></div>
            </div>

        </div>
        <!-- taskbar -->
        <div class="flex justify-center ">
            <div class="flex items-center w-[1024px] h-15">
                <div class="  hover:bg-[#F2F2F2] rounded-md py-3 px-4 "><a href="./profile.php"
                        class="text-[#84878A] font-semibold h-full active">Posts</a></div>
                <div class=" px-4  hover:bg-[#F2F2F2] rounded-md py-3"><a href="./about.php"
                        class="text-[#84878A] font-semibold ">About</a></div>
                <!-- <div class=" px-4  hover:bg-[#F2F2F2] rounded-md py-3 px-4"><a href=""
                        class="text-[#84878A] font-semibold">Friends</a></div> -->
                <div class=" px-4  hover:bg-[#F2F2F2] rounded-md py-3 "><a href="./photos.php"
                        class="text-[#84878A] font-semibold ">Photos</a></div>
                <div class=" px-4  hover:bg-[#F2F2F2] rounded-md py-3 "><a href="./videos.php"
                        class="text-[#84878A] font-semibold ">Videos</a></div>
            </div>
        </div>

    </div>
    <!-- in the middle -->
    <div class="flex justify-center w-full h-full">
        <div class="relative   w-[590px]   pt-5">


            <!-- loop posts -->

            <?php foreach (array_reverse($rows) as $row) {
                if (pathinfo($row['image'], PATHINFO_EXTENSION) === "mp4") {
                    // posts
                    echo '<div class="min-h-[100px] w-full bg-white rounded-xl shadow-3xl mb-4">';
                    // poster
                    echo '<div class="flex px-4 pt-3 mb-2">';
                    echo '<img class="object-cover w-[40px] h-[40px] rounded-full" src="../../backend/avatar/' . $avatar["avatar"] . '">';
                    echo '<div class="ml-2 w-full flex items-start justify-between">';
                    echo '<div class="-top-1">';
                    echo '<h1 class="text-sm font-semibold">' . $_SESSION["username"] . '</h1>';
                    echo '<p class="text-xs text-[#84878A] font-semibold">' . $row["created_at"] . '</p>';
                    echo '</div>';
                    echo '<div class="relative h-10 w-10 hover:bg-[#F2F2F2] cursor-pointer rounded-full">';
                    echo '<i class="absolute bx bx-dots-horizontal-rounded text-2xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></i>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    // description
                    echo '<div class="min-h-[20px] w-full px-4 mb-3">';
                    echo '<p>' . $row["content"] . '</p>';
                    echo '</div>';

                    // videos


                    echo '<video class="w-full h-full"  preload="metadata" controls id="myVideo">
                    <source src="' . $targetVideo . $row['image'] . '#t=0.1' . '" type="video/mp4">
                    <source src="' . $targetVideo . $row['image'] . '" type="video/ogg">
                    <source src="' . $targetVideo . $row['image'] . '" type="video/webm">
                    
                    </video>';

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
                }
            } ?>

        </div>
    </div>
</body>

</html>