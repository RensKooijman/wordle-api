
<!DOCTYPE html>
<html lang="nl">
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
                <p>alle requests moeten gemaakt worden met onze API key</p>
                <div id="output"></div>
                <button class="btn btn-primary mt-3" onclick="fetchData('/word?api_token=p2lbgWkFrykA4QyUmpHihzmc5BNzIABq', 'Random Word')">Get Random Word</button>
                <button class="btn btn-secondary mt-3" onclick="fetchAllWords('/words/all?api_token=p2lbgWkFrykA4QyUmpHihzmc5BNzIABq')">Get All Words</button>
                <button class="btn btn-success mt-3" onclick="fetchData('/words/random?api_token=p2lbgWkFrykA4QyUmpHihzmc5BNzIABq', 'Word of the Day')">Get Word of the Day</button>
            </div>
        </div>
        <div class="col-md-10 offset-md-2 py-5">
            <div class="routes d-flex">
                <div class="soorten">
                    <p class="fs-5 my-4">Om een random woord te krijgen kan je een request maken naar onze URL: "wordleApi.com/word"</p>
                    <p class="fs-5 my-4">Om alle woorden op te halen kan je een request maken naar onze URL: "wordleApi.com/words/all"</p>
                    <p class="fs-5 my-4">Om het woord van de dag te krijgen kan je een request maken naar onze URL: "wordleApi.com/words/random"</p>
                    <p class="fs-5 my-4">Om alle scores op te halen kan je een request maken naar onze URL: "wordleApi.com/leaderboard"</p>
                    <p class="fs-5 my-4">Om een score toe te voegen kan je een POST request maken naar onze URL: "wordleApi.com/leaderboard"</p>
                    <p class="fs-5 my-4">Om een score te verwijderen kan je een request maken naar onze URL: "wordleApi.com/leaderboard/{id}/delete"</p>
                    <p class="fs-5 my-4">Om alle gebruikers op te halen kan je een request maken naar onze URL: "wordleApi.com/user"</p>
                    <p class="fs-5 my-4">Om een specifieke gebruiker op te halen kan je een request maken naar onze URL: "wordleApi.com/user/{id}"</p>
                    <p class="fs-5 my-4">Om een nieuwe gebruiker te maken kan je een POST request maken naar onze URL: "wordleApi.com/user/create"</p>
                    <p class="fs-5 my-4">Om een gebruiker te valideren kan je een POST request maken naar onze URL: "wordleApi.com/user/{id}/validate"</p>
                    <p class="fs-5 my-4">Om een gebruiker te wijzigen kan je een POST request maken naar onze URL: "wordleApi.com/user/{id}/change"</p>
                    <p class="fs-5 my-4">Om een gebruiker te verwijderen kan je een request maken naar onze URL: "wordleApi.com/user/{id}/delete"</p>
                </div>
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

