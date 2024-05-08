<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .welcome-text {
            font-size: 100px;
            animation: blink 1s infinite;
            position: relative;
            overflow: hidden;
        }

        .firework {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ff0000;
            border-radius: 50%;
            animation: fireworks 2s infinite;
        }

        @keyframes fireworks {
            0% {
                transform: translate(0, 0) scale(1);
                opacity: 1;
            }
            100% {
                transform: translate(0, -500px) scale(0.2);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <?php
    include("../pages/taskbar.php");
    ?>
    <!-- ========================= Main ==================== -->
    <?php
    include("../pages/mainadmin.php");
    ?>

    <div style="display: flex; justify-content: center;">
        <p class="welcome-text">WELCOME TO <br> &nbsp;TQDA&nbsp; ADMIN</p>
        <script>
            const welcomeText = document.querySelector('.welcome-text');

            function createFirework() {
                const firework = document.createElement('span');
                firework.classList.add('firework');
                firework.style.left = Math.random() * 100 + '%';
                firework.style.animationDelay = Math.random() * 2 + 's';
                welcomeText.appendChild(firework);
            }

            setInterval(createFirework, 500);

            function LogOut() {
                localStorage.clear();
            }
        </script>
    </div>


    <style>
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
    </div>
    </div>
    </div>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>