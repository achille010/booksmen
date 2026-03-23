<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Reader</title>
    <style>
        * {
            font-family: 'Quicksand';
            font-size: xx-large;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 0 10% 0 10%;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        textarea {
            width: 100%;
            height: 200px;
            border-radius: 7px;
        }
    </style>
</head>

<body>
    <h1>File Reader</h1>
    <form method="post">
        <label for="filename">Enter filename:</label>
        <input style="border-radius: 5px; border: .5px solid black;" type="text" name="filename" id="filename" required>
        <button style="border-radius: 5px; border: .5px solid black;" type="submit">Read File</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $file = $_POST['filename'];

        function readFileContent($file)
        {
            if (!file_exists($file)) {
                throw new Exception("File '$file' does not exist ✗");
            }

            if (!is_file($file)) {
                throw new Exception("Path is not a file");
            }

            $content = file_get_contents($file);
            if ($content === false) {
                throw new Exception("Failed to read '$file' ✗");
            }

            if (filesize($file) === 0) {
                throw new Exception("'$file' is empty!");
            }

            return $content;
        }

        try {
            $content = readFileContent($file);
            echo "<h2 class='success'>File content:</h2>";
            echo "<textarea readonly>" . htmlspecialchars($content) . "</textarea>";
        } catch (Exception $e) {
            echo "<p class='error'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        } finally {
            echo "<p>Done trying to read the file.</p>";
        }
    }
    ?>
</body>

</html>