<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance | CreativeTech</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            overflow: hidden;
            background: linear-gradient(-45deg, #0f2027, #203a43, #2c5364, #000428);
            background-size: 400% 400%;
            animation: gradient 12s ease infinite;
            color: #fff;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        .content {
            max-width: 700px;
            animation: fadeUp 1.2s ease forwards;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            opacity: 0.85;
            margin-bottom: 35px;
            line-height: 1.7;
        }

        .progress-box {
            width: 100%;
            background: rgba(255,255,255,0.1);
            border-radius: 50px;
            overflow: hidden;
            margin-bottom: 25px;
        }

        .progress-bar {
            height: 10px;
            width: 0%;
            background: linear-gradient(90deg, #00c6ff, #0072ff);
            animation: load 4s ease-in-out infinite;
        }

        @keyframes load {
            0% { width: 0%; }
            50% { width: 80%; }
            100% { width: 100%; }
        }

        .status {
            font-size: 14px;
            opacity: 0.7;
        }

        /* Floating particles */
        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: rgba(255,255,255,0.15);
            border-radius: 50%;
            animation: float 10s infinite linear;
        }

        @keyframes float {
            from {
                transform: translateY(100vh) translateX(0);
            }
            to {
                transform: translateY(-10vh) translateX(100px);
            }
        }

        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 13px;
            opacity: 0.5;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 30px;
            }
            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <!-- Particles -->
    <div class="particle" style="left:10%; animation-delay:0s;"></div>
    <div class="particle" style="left:25%; animation-delay:2s;"></div>
    <div class="particle" style="left:40%; animation-delay:4s;"></div>
    <div class="particle" style="left:60%; animation-delay:1s;"></div>
    <div class="particle" style="left:75%; animation-delay:3s;"></div>
    <div class="particle" style="left:90%; animation-delay:5s;"></div>

    <div class="container">
        <div class="content">
            <div class="logo">CREATIVE TECH</div>
            <h1>Website Sedang Dalam Maintenance</h1>
            <p>
                Kami sedang melakukan peningkatan sistem untuk memberikan
                pengalaman terbaik, lebih cepat, aman, dan profesional.
                Silakan kembali dalam waktu dekat.
            </p>

            <div class="progress-box">
                <div class="progress-bar"></div>
            </div>

            <div class="status">System upgrading in progress...</div>
        </div>
    </div>

    <footer>
        © 2025 CreativeTech. All Rights Reserved.
    </footer>

</body>
</html>
