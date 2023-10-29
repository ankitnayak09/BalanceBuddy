<?php include("./header.php"); ?>
<title>Signup | Balance Buddy</title>
</head>

<body>
    <main class="bg-slate-700 h-[calc(100vh-30px)] w-full flex justify-center items-center">
        <div class="bg-cyan-300 py-10 px-5 rounded-md">
            <h1 class="text-2xl font-bold text-center">Create an Account</h1>
            <hr class="mt-2 mb-5">
            <form method="POST">

                <label class="my-2 block">
                    <!-- Username -->
                    <input type="text" name="username" placeholder="Username" required>
                </label>

                <label class="my-2 block">
                    <!-- Password -->
                    <input type="text" name="password" placeholder="Password" required>
                </label>

                <label class="my-2 block">
                    <!-- Confirm Password -->
                    <input type="text" name="confirmPassword" placeholder="Confirm Password" required>
                </label>

                <button type="submit"
                    class="bg-slate-700 text-white hover:scale-105 hover:shadow-md active:scale-95 duration-75 py-1 rounded-md w-full">Join
                    Us!</button>
            </form>
            <hr class="my-2">
            <p class="text-center w-full">
                Already have an Account ?
                <a href="./index.php" class="text-slate-700 underline">Log In</a>
            </p>
        </div>

    </main>
    <?php include("./footer.php"); ?>