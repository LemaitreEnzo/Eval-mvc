<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body {
        min-height: 100vh;
        background-color: #f0f4f8;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 5%;
        margin-top: 5%;
    }

    .blog-container {
        width: 100%;
        max-width: 400px;
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-left: 5%;
    }

    .blog-container h1 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: #333;
    }

    .blog-form {
        display: flex;
        flex-direction: column;
    }

    .blog-form label {
        margin-bottom: 0.5rem;
        font-weight: bold;
        color: #333;
    }

    .blog-form input[type="text"] {
        width: 100%;
        padding: 0.8rem;
        margin-bottom: 1rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
        color: #333;
    }

    .add {
        padding: 0.8rem;
        width: 200px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .add:hover {
        background-color: #45a049;
    }

    select {
        margin-bottom: 5%;
    }
</style>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Tâche</title>
</head>

<body>

    <div class="container">
        <div class="blog-container">
            <div>
                <h1>Ajouter un Blog</h1>
                <form class="blog-form" action="/add-blog" method="POST">
                    <label for="blog-name">Nom du Blog:</label>
                    <input type="text" id="blog-name" name="blog-name" placeholder="Entrez le nom de la tâche" required>

                    <button class="add" type="submit" name="add_blog">Ajouter</button>
                </form>
            </div>
        </div>


        <?= $data['content'] ?>
</body>

</html>