<?php
$res = $bdd->query("SELECT * FROM chat ORDER BY id DESC");
$res->fetch();
?>
<form method="post" action="minichat_post.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Pseudo</label>
        <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea class="form-control" name="content" id="exampleInputPassword1"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
    <?php foreach ($res as $k => $v): ?>
    <h1><?= $v['pseudo']; ?></h1>
    <p><?= $v['message']; ?></p>
</div>