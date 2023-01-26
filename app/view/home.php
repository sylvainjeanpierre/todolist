<?php include 'header.html'; ?>

<div>
    <h1>Todo List</h1>
    <h3>Tasks : </h3>

    <ul>
        <?php foreach ($results as $result) { ?>
            <li><?= $result['content']; ?></li>
        <?php } ?>
    </ul>
</div>

<?php include 'footer.html'; ?>