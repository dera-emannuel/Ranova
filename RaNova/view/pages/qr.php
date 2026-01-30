<!DOCTYPE html>
<html>
<head>
    <title>QR Code Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        input {
            width: 300px;
            padding: 10px;
        }
        button {
            padding: 10px 15px;
        }
        img {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h2>Generate QR Code from URL</h2>

    <form method="post">
        <input type="url" name="url" placeholder="Paste URL here" required>
        <button type="submit">Generate</button>
    </form>

    <?php
    if (isset($_POST['url'])) {
        $url = urlencode($_POST['url']);
        echo "<h3>Your QR Code:</h3>";
        echo "<img src='https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=$url'>";
    }
    ?>

</body>
</html>
