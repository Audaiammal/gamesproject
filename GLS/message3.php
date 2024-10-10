<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Level 1 Popup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #f0f8ff, #e6e6fa);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .container {
            text-align: center;
        }

        .popup-btn {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .popup-btn:hover {
            background-color: #45a049;
        }

        .popup {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .popup-content h2 {
            margin: 0 0 10px 0;
        }

        .popup-content p {
            margin: 0;
        }

        /* Show the popup */
        .popup:target {
            display: flex; /* Show the popup */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Level 1</h1>
        <a href="#popup" class="popup-btn">Show Popup</a>

        <div class="popup" id="popup">
            <div class="popup-content">
                <a href="#" class="close-btn" style="float:right; font-size:24px;">&times;</a>
                <h2>Level 1 Popup</h2>
                <p>This is your message for Level 1!</p>
				
            </div>
        </div>
    </div>
</body>
</html>
