<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <h1>Send Email</h1>
            </div>
            <form action="send.php" method="post">
                <div class="input-group">
                    <input type="text" name= "name" required>
                    <label for="">Nama</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-group">
                    <input type="text" name="subject" required>
                    <label for="">Subject</label>
                </div>
                <div class="message">
                    <textarea name="message" rows="5" style="width: 100%; resize: none" placeholder="Tulis Pesan..."></textarea>
                </div>
                <button type="submit" name="send">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>