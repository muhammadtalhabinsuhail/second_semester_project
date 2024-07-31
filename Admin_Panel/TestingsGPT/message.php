<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message App</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
    }

    textarea {
        width: 100%;
        height: 100px;
        margin-bottom: 10px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Send Message</h2>
        <form id="messageForm">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="button" onclick="sendMessage()">Send Message</button>
        </form>
    </div>

    <div class="container">
        <h2>Received Messages</h2>
        <ul id="messagesList"></ul>
    </div>

    <script>
    function sendMessage() {
        var message = document.getElementById('message').value;

        // Check if the message is not empty
        if (message.trim() !== '') {
            // Send the message to the server using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'index.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Clear the input field after successful submission
                    document.getElementById('message').value = '';
                    // Update the list of received messages
                    updateMessages();
                }
            };
            // Send the message as a POST parameter
            xhr.send('message=' + encodeURIComponent(message));
        }
    }

    function updateMessages() {
        // Retrieve the list of messages from the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'index.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Update the list of received messages
                var messagesList = document.getElementById('messagesList');
                messagesList.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Update the list of received messages on page load
    window.onload = function() {
        updateMessages();
    };
    </script>

    <?php
        // File to store messages
        $filename = 'messages.txt';

        // Handle sending messages
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = $_POST['message'];

            // Check if the message is not empty
            if (trim($message) !== '') {
                // Append the message to the file
                file_put_contents($filename, $message . PHP_EOL, FILE_APPEND);
            }
        }

        // Handle receiving messages
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Read messages from the file
            $messages = file($filename, FILE_IGNORE_NEW_LINES);
        
            // Output messages as an unordered list using a while loop
            echo '<ul>';
            $index = 0;
            $count = count($messages);
            while ($index < $count) {
                echo '<li>' . htmlspecialchars($messages[$index]) . '</li>';
                $index++;
            }
            echo '</ul>';
        }
        ?>
</body>

</html>