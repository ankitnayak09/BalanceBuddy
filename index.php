<?php include("./header.php"); ?>
<title>Login | Balance Buddy</title>
</head>

<body>
    <main class="bg-slate-700 h-[calc(100vh-30px)] w-full flex justify-center items-center">
        <div class="bg-cyan-300 py-10 px-5 rounded-md">
            <h1 class="text-2xl font-bold text-center">Login to Balance Buddy</h1>
            <hr class="mt-2 mb-5">
            <form method="POST">
                <label class="my-2 block">
                    Username
                    <input type="text" name="username" placeholder="username" required>
                </label>

                <label class="my-2 block">
                    Password
                    <input type="text" name="password" placeholder="password" required>
                </label>
                <button type="submit"
                    class="bg-slate-700 text-white hover:scale-105 hover:shadow-md active:scale-95 duration-75 py-1 rounded-md w-full">Log
                    Me
                    In!</button>
            </form>
            <hr class="my-2">
            <p class="text-center w-full">
                Don't have an Account ?
                <a href="./signup.php" class="text-slate-700 underline">Sign Up</a>
            </p>
        </div>

    </main>
    <?php include("./footer.php"); ?>