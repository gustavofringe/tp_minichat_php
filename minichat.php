<?php
include 'db/db.php';
$res = $bdd->query("SELECT * FROM post ORDER BY id DESC");
$res->execute();
$scr = $res->fetchAll();
?>
<form method="post" action="minichat_post.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Pseudo</label>
        <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Message</label>
        <textarea class="form-control" name="message" id="exampleInputPassword1"></textarea>
    </div>
    <button class="btn btn-primary">Submit</button>
</form>
<div class="row mt-3">
    <?php foreach ($scr as $k => $v): ?>
        <div class="card col-md-3" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $v['pseudo']; ?> Dit: </h4>
                <p class="card-text"><?= $v['message']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>