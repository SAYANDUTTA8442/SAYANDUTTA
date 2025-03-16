<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .error-container {
            max-width: 600px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }

        h1 {
            font-size: 4rem;
            color: #ff6f61;
            
        }

        h2 {
            font-size: 2rem;
            color: #ffffff;
        }

        p {
            font-size: 1.2rem;
            color: #d1d1d1;
        }

        a {
            color: #00eaff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #ff6f61;
        }

        @keyframes neonPulse {
            0%, 100% {
                text-shadow: 0 0 10px #ff6f61, 0 0 20px #ff6f61, 0 0 30px #ff6f61, 0 0 40px #ff6f61;
            }
            50% {
                text-shadow: 0 0 5px #ff6f61, 0 0 10px #ff6f61, 0 0 15px #ff6f61, 0 0 20px #ff6f61;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <h2>Oops! Page Not Found</h2>
        <p>The page you’re looking for doesn’t exist or has been moved.</p>
        <p><a href="index.php">Return to Home</a></p>
    </div>
</body>
</html>
