<style>
    /* Style du titre */
    h2 {
        text-align: center;
        color: #333;
    }

    /* Style de la liste */
    ul {
        list-style-type: none;
        /* Supprimer les puces */
        padding: 0;
    }

    li {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Style pour chaque tâche */
    #blogs>div {
        margin: 10px 0;
        /* Espacement entre les tâches */
        padding: 15px;
        /* Espacement à l'intérieur */
        border-radius: 8px;
        /* Coins arrondis */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        /* Ombre légère */
        display: flex;
        justify-content: space-between;
        /* Alignement des éléments */
        align-items: center;
        /* Alignement vertical */
    }

    .blogs_container {
        display: flex;
    }

    /* Style de la description de la tâche */
    .book-card__description {
        margin-left: 50%;
    }

    /* Style du footer de la tâche */
    .book-card__footer {
        display: flex;
        /* Utiliser flex pour le footer */
        justify-content: flex-end;
        /* Aligner les boutons à droite */
        width: 100%;
        /* Prendre toute la largeur */
        margin-top: 10px;
        /* Espacement au-dessus des boutons */
    }

    /* Style du bouton de suppression */
    .delete {
        background-color: #ff4d4d;
        /* Couleur rouge */
        color: white;
        /* Couleur du texte */
        border: none;
        /* Supprimer la bordure */
        border-radius: 5px;
        /* Coins arrondis */
        padding: 10px 15px;
        /* Espacement intérieur */
        cursor: pointer;
        /* Curseur en forme de main */
        transition: background-color 0.3s ease;
        /* Effet de transition */
        margin-left: 10px;
        /* Espacement entre les boutons */
        width: 50px;
        /* Largeur uniforme des boutons */
    }

    .delete:hover {
        background-color: #e60000;
        /* Couleur rouge plus foncé au survol */
    }


    /* Styles pour la modale */
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        width: 300px;
        text-align: center;
    }
</style>


<?php
require_once 'models/Blogs.php';
$allBlogs = new Blogs();

?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<main>
    <h2>Blogs :</h2>
    <ul>
        <li>
            <div id="blogs">
                <?php foreach ($data['blogs'] as $blog): ?>
                    <div class="blogs_container">
                        <div>
                            <p class="book-card__description"><?= $blog['title'] ?></p><br>
                            <p class="book-card__description"><?= $blog['created_at'] ?></p><br>
                            <!-- Messages du blogs -->
                        </div>

                        <div class="book-card__footer">
                            <form id="form-<?= $blog['id'] ?>" action="/delete-blog" method="POST">
                                <input type="hidden" name="id" value="<?= $blog['id'] ?>">
                                <button class="delete" type="button" data-bs-toggle="modal" onclick="openModal(<?= $blog['id'] ?>)"><ion-icon name="trash-outline"></ion-icon></button>
                            </form>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </li>
    </ul>
</main>

<div id="modal" class="modal" style="display: none;">
    <div class="modal-content">
        <p>Êtes-vous sûr de vouloir supprimer cette tâche ?</p>
        <button id="confirmDelete">Confirmer</button>
        <button onclick="closeModal()">Annuler</button>
    </div>
</div>

<script>
    function openModal(blogId) {
        document.getElementById('modal').style.display = 'flex';
        document.getElementById('confirmDelete').onclick = function() {
            document.getElementById('form-' + blogId).submit();
        };
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }
</script>

