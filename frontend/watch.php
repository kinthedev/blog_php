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
?>

<body class="pt-[55px] bg-[#F2F4F7]">
    <!-- navbar -->
    <div class="fixed top-0 z-111 flex items-center justify-between w-full h-[55px] bg-[#ffffff] shadow-md px-5 py-2">
        <div class="flex flex-1/3   ">
            <a href="./home.php" class="">
                <img class="w-11 h-11" src="../public/assets/logo.png" alt="">
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

            <a class=" px-10 py-2 rounded-xl hover:bg-[#F2F2F2] " href="../public/home.php">
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
                    src="../backend/avatar/<?php echo $avatar["avatar"] ?>" alt="">
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
                                src="../backend/avatar/<?php echo $avatar["avatar"] ?>" alt="">
                        </div>
                        <div class="">
                            <p class="text-center font-semibold"><?php echo $_SESSION['username'] ?></p>
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



            <!-- loop posts -->
            <?php foreach (array_reverse($rows) as $row) {
                if (pathinfo($row['image'], PATHINFO_EXTENSION) === "mp4") {
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
                    echo '<i class="absolute bx bx-dots-horizontal-rounded text-2xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></i>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    // description
                    echo '<div class="min-h-[20px] w-full px-4 mb-3">';
                    echo '<p>' . $row["content"] . '</p>';
                    echo '</div>';

                    // picture

                    echo '<video class="w-full h-full"  controls>
                    <source src="' . $targetVideo . $row['image'] . '" type="video/mp4">
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
    <script src="./script.js"></script>
</body>


</html>