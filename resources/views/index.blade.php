
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordle API Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Wordle API Demo</h1>
                <div id="output"></div>
                <button class="btn btn-primary mt-3" onclick="fetchData('/word', 'Random Word')">Get Random Word</button>
                <button class="btn btn-secondary mt-3" onclick="fetchAllWords('/words/all')">Get All Words</button>
                <button class="btn btn-success mt-3" onclick="fetchData('/words/random', 'Word of the Day')">Get Word of the Day</button>
            </div>
        </div>
    </div>

    <script>
        function fetchData(url, title) {
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('output').innerHTML = `<p>${title}: <strong>${data.word || data.words}</strong></p>`;
                })
                .catch(error => console.error('Error:', error));
        }

        function fetchAllWords(url) {
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    let wordsList = data.words.map(word => word.words).join(', ');
                    document.getElementById('output').innerHTML = `<p>All Words: <strong>${wordsList}</strong></p>`;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>

