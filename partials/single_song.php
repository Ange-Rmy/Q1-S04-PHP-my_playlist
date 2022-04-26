<?php
    require 'partials/header.php';
    require "data/songs_data.php";
    require "data/genres_data.php";
?>

<div classs="col-6">
    <iframe width="100%" src="https://www.youtube.com/embed/<?=$value['video']?>">
</div>

<?php
    require 'partials/footer.tpl';
?>
