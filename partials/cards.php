<?php
    require "data/songs_data.php";
    require "data/genres_data.php";
    
    foreach ($songs as $value):
?>
        
        <div class="card col-3" >
            <!--<img src="https://picsum.photos/300/200" class="card-img-top" alt="...">-->
            <iframe width="100%" src="https://www.youtube.com/embed/<?=$value['video']?>">
            </iframe>
            <div class="card-body">
                <h5 class="card-title"><?=$value['title']?></h5>
                <p class="card-text"><?=$value['artist']?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?=$value['year']?></li>
                <li class="list-group-item"><?=$genres?></li>
            </ul>
            <div class="card-body">
                <a href="single_song.php" class="card-link">En savoir plus !</a>
            </div>
        </div>
        
<?php
    endforeach;
?>
