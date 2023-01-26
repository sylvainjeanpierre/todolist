<?php include 'header.html'; ?>

<div class="base">
    <h1>Todo List</h1>

    <h2>New task</h2>
    <form action="router.php" method="get">
        <label for="new_task"></label>
        <input type="hidden" name="action" value="addTask">
        <input type="text" id="new_task" name="content"><br>
        <input type="submit" value="Insert">
    </form>


    <h3>Tasks : </h3>

    <ul>
        <?php foreach ($results as $result) { ?>
            <li><?= $result['content']; ?></li>
        <?php } ?>
    </ul>
</div>

<?php include 'footer.html'; ?>