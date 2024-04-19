<!DOCTYPE html>
<html lang="en">
<head>  // Made by Sabbir Github.com/s8rr
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Word Replicator</title>  // Made by Sabbir Github.com/s8rr
<link rel="icon" href="https://cdn.discordapp.com/attachments/950396697450786856/1231020017315872908/Asset_64x.png?ex=66244c3b&is=6622fabb&hm=b32f23919811e426abddb53de43e90456871b022428d7a93af26849d6b974b5f&" type="image/png">    
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;  // Made by Sabbir Github.com/s8rr
    }
    .container {
        text-align: center;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }
    input[type="text"],
    input[type="number"],
    textarea,
    button {
        padding: 10px;
        margin: 10px;
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        width: 200px;
    }
    input[type="text"]:focus,
    input[type="number"]:focus,
    textarea:focus,
    button:focus {
        outline: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    input[type="text"]::placeholder,
    input[type="number"]::placeholder {
        color: #999;
    }
    button {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
    img {
        width: 100px;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
// Made by Sabbir Github.com/s8rr
<div class="container">
    <img src="http://nginx.44hz.co/logo.png" alt="Logo">
    <h2>Word Replicator</h2>
    <input type="text" id="wordInput" placeholder="Enter a word"><br>
    <input type="number" id="quantityInput" placeholder="Quantity"><br>
    <button onclick="generateText()">Generate</button><br>
    <textarea id="output" rows="5" cols="40" placeholder="Generated text will appear here" readonly></textarea><br>
    <button onclick="copyToClipboard()">Copy</button>
</div>
// Made by Sabbir Github.com/s8rr
<script>
    function generateText() {
        var word = document.getElementById("wordInput").value;
        var quantity = document.getElementById("quantityInput").value;
        var output = "";

        for (var i = 0; i < quantity; i++) {
            output += word + " ";
        }
// Made by Sabbir Github.com/s8rr
        document.getElementById("output").value = output;
    }

    function copyToClipboard() {
        var copyText = document.getElementById("output");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        document.execCommand("copy");
// Made by Sabbir Github.com/s8rr
        // Alert removed, you can add any other feedback mechanism here if needed.
    }
</script>

</body>
</html>
