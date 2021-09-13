<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ACF Field Key Generator Tool</title>
    <link rel="icon" href="../images/acf.png">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <div class="site-main">
        <header>
            <h1 class="">ACF Field Key Generator</h1>
            <p>
                Refresh the page to get unique field key used for ACF.
            </p>
        </header>
        <main>
            <p>The unique field key is <strong><<span id="field-key-copy"><?= 'field_' . uniqid(); ?></span>></strong></p>
            <p><button onclick="copyToClipboard('field-key-copy');">Copy to clipboard</button></p>
            <p>The unique field group is <strong><<span id="field-group-copy"><?= 'group_' . uniqid(); ?></span>></strong></p>
            <button onclick="copyToClipboard('field-group-copy');">Copy to clipboard</button>
        </main>
    </div>
</div>

<script src="../js/script.js"></script>
</body>
</html>