<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Chat Sederhana</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: auto; padding: 20px; }
        #chat-box { border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: scroll; background: #f9f9f9; }
        form { margin-top: 10px; }
    </style>
</head>
<body>
    <h2>WEBSITE CHAT RAFA (PHP)</h2>
    <div id="chat-box">
        <?php
        $chat = file_get_contents("chat.txt");
        echo nl2br(htmlspecialchars($chat));
        ?>
    </div>

    <form method="post" action="post.php">
        <input type="text" name="user" placeholder="Nama" required>
        <input type="text" name="message" placeholder="Pesan" required>
        <button type="submit">Kirim</button>
    </form>

    <script>
        setInterval(function() {
            fetch('chat.txt')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('chat-box').innerHTML = data.replace(/\n/g, "<br>");
                });
        }, 2000); // refresh setiap 2 detik
    </script>
</body>
</html>  