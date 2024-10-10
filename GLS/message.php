 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Project - Level 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .quiz-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 10px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .close-btn {
            background-color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<div class="quiz-container">
    <h1>Quiz Level 1</h1>
    <p>What is the capital of France?</p>
    <button onclick="checkAnswer('correct')">Paris</button>
    <button onclick="checkAnswer('wrong')">London</button>
    <button onclick="checkAnswer('wrong')">Berlin</button>
    <button onclick="checkAnswer('wrong')">Madrid</button>
</div>

<div class="popup" id="popup">
    <p id="popup-message"></p>
    <button class="close-btn" onclick="closePopup()">Close</button>
</div>

<script>
    function checkAnswer(answer) {
        const popup = document.getElementById('popup');
        const message = document.getElementById('popup-message');

        if (answer === 'correct') {
            message.innerText = 'Correct! Paris is the capital of France.';
        } else {
            message.innerText = 'Wrong answer. Try again!';
        }
        popup.style.display = 'block';
    }

    function closePopup() {
        const popup = document.getElementById('popup');
        popup.style.display = 'none';
    }
</script>

</body>
</html>
