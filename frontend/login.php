<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="../src/output.css" rel="stylesheet">
    <link href="../src/input.css" rel="stylesheet">

</head>

<body>
    <?php require_once __DIR__ . "/../backend/auth/auth_login.php" ?>
    <div class="flex">
        <div class="relative w-[64.99%] h-screen bg-linear-to-r from-[#475dce] to-[#3d4ad7] rounded-r-3xl">
            <div class="absolute left-1/2 top-[45%] -translate-x-1/2 -translate-y-1/2 ">
                <h1 class="text-5xl text-white font-bold"> Welcome back </h1>
                <p class="text-2xl text-white">Blog helps you connect and share with friends around you</p>
            </div>
        </div>
        <form method="post" class=" w-[35%] flex flex-col items-center py-25 px-25 space-y-8 " autocomplete="off">
            <img class=" w-[75px] " src=" ../public/assets/logo.svg" alt="">
            <h2 class="font-sans text-4xl">Sign up</h2>
            <div class="relative w-full">
                <input class="w-full outline-none  py-1" type="text" name="usernameoremail"
                    placeholder="Username or email address">
                <span class="w-full absolute left-0 -bottom-1  h-px bg-gray-400"></span>
                <span class=<?php if (!empty($usernameoremailErr)) echo "error" ?>>
                    <?php echo $usernameoremailErr ?></span>
            </div>
            <div class="relative w-full">
                <input class="w-full outline-none  py-1" type="password" name="password" placeholder="Password">
                <span class="w-full absolute left-0 -bottom-1  h-px bg-gray-400"></span>
                <span class=<?php if (!empty($passErr)) echo "error" ?>>
                    <?php echo $passErr ?></span>
            </div>
            <div class="w-full flex justify-between text-sm">
                <label class="flex ">
                    <input type="checkbox">
                    <div class="select-none">Remember me</div>
                </label>
                <a class="hover:text-[#3d4ad7] hover:underline " href="#">Forgot password</a>
            </div>
            <button type="submit" class=" w-full rounded-3xl py-2 cursor-pointer active:scale-101 hover: bg-linear-to-r
                from-[#5468cd] to-[#373b8a] text-white hover:-translate-y-0.25" type="submit">Login</button>
            <span>Don't have a account? <a class="text-[#3d4ad7] hover:underline " href="./signup.php">Sign
                    up</a></span>
        </form>
    </div>
</body>

</html>