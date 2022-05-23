<?php
    include '../model/model_article.php';
    include '../utils/connect_bdd.php';
    include '../view/view_article.php';

    $article = new Article(null, null);
    $tab = $article -> showAllArticle($bdd);
    foreach($tab as $value){
        echo '<li>
        '.$value->nom_art.', '.$value->content_art.'
        </li>';
    }
    echo "</ul>
    </body>
    </html>";
?>