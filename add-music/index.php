<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <div>

            </div>
        </header>

        <div>
            <div class="form">
                <div class="title"> <h2> Add new music</h2>
                </div>

                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input name="file" type="file"">
                    <select id="artist" name="artist">
                    <option value="jubin">jubin</option>
                    <option value="arijit">arijit</option>
                    <option value="Anupam">Anupam</option>
                    <option value="One-direction">One-direction</option>
                    <option value="tahsan">tahsan</option>
                    </select>
                    <input name="songs title" type="text" placeholder="Title">
                    
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </main>
</body>
</html>