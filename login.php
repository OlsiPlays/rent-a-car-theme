<?php
/* Template Name: Custom Login */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Car Garage</title>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Fullscreen background with dark overlay */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') no-repeat center center/cover;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85); /* Darker background */
            z-index: -1;
        }

        /* Container */
        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        /* Speedometer-Inspired Animation */
        .speedometer {
            position: absolute;
            width: 15vw; /* Smaller width */
            height: 15vw; /* Smaller height */
            max-width: 200px; /* Maximum size */
            max-height: 200px;
            border-radius: 50%;
            border: 2px solid rgba(255, 0, 0, 0.9);
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.9);
            animation: speedGlow 2s infinite alternate;
        }

        @keyframes speedGlow {
            0% { transform: rotate(0deg); filter: blur(3px); border-color: rgba(255, 0, 0, 0.6); }
            50% { transform: rotate(90deg); filter: blur(6px); border-color: rgba(255, 0, 0, 0.8); }
            100% { transform: rotate(180deg); filter: blur(3px); border-color: rgba(255, 0, 0, 1); }
        }

        /* Login Box */
        .login-box {
            position: relative;
            background: rgba(0, 0, 0, 0.9);
            padding: 2.5vw; /* Smaller padding */
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(255, 0, 0, 1); /* Fully red */
            width: 70%; /* Smaller width */
            max-width: 300px;
            z-index: 1;
        }

        /* Heading */
        .login-box h2 {
            color: white;
            margin-bottom: 15px; /* Smaller margin */
            font-size: 1.5em; /* Smaller size */
        }

        /* Input Fields */
        .login-box input {
            width: 100%;
            padding: 0.8em; /* Smaller padding */
            margin: 0.4em 0; /* Smaller margin */
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 0.9em; /* Smaller size */
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-align: center;
        }

        /* Buttons */
        .buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 0.8em; /* Smaller margin */
        }

        .forgot {
            color: white;
            font-size: 0.7em; /* Smaller size */
            text-decoration: none;
            margin-bottom: 0.4em; /* Smaller margin */
        }

        button {
            padding: 0.8em 1.5em; /* Smaller padding */
            border: none;
            border-radius: 5px;
            background: linear-gradient(90deg, red, darkred, red);
            color: white;
            font-size: 0.9em; /* Smaller size */
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }

        button:hover {
            filter: brightness(1.2);
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .speedometer {
                width: 18vw; /* Smaller width */
                height: 18vw; /* Smaller height */
                max-width: 180px;
                max-height: 180px;
            }

            .login-box {
                padding: 6vw; /* Smaller padding */
                width: 85%;
            }

            .login-box h2 {
                font-size: 1.3em; /* Smaller size */
            }

            .login-box input {
                font-size: 0.9em; /* Smaller size */
            }

            button {
                padding: 0.6em 1.2em; /* Smaller padding */
            }
        }

        @media (max-width: 480px) {
            .speedometer {
                width: 20vw; /* Smaller width */
                height: 20vw; /* Smaller height */
                max-width: 150px;
                max-height: 150px;
            }

            .login-box {
                padding: 8vw; /* Smaller padding */
                width: 90%;
            }

            .login-box h2 {
                font-size: 1.1em; /* Smaller size */
            }

            button {
                padding: 0.8em; /* Smaller padding */
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="speedometer"></div>
    <div class="login-box">
        <h2>Rent a Car Login</h2>
        <form action="<?php echo wp_login_url(home_url()); ?>" method="post">
            <input type="text" name="log" placeholder="Username" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <div class="buttons">
                <a href="<?php echo wp_lostpassword_url(); ?>" class="forgot">Forgot Password?</a>
                <button type="submit">Start Engine</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
