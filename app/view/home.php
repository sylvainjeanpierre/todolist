<?php include 'header.html'; ?>

<div>
    <h1>Todo List</h1>
    <h3>Tasks : </h3>

    <?php foreach ($results as $result) {?>
        <p><?= $result['content']; ?></p>
    <?php } ?>
</div>

<?php include 'footer.html'; ?>