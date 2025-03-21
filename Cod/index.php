<!DOCTYPE html>
<html lang="ku">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post-Job techcorner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Post-Job:</h1>
        <form method="POST" id="postForm" action=index.php>
            <label for="title">Title Jop:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="email">Company:</label>
            <input type="text" id="email" name="email">
            
            <button type="submit" name="submit">Send:</button>
        </form>
        <p id="message"></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
