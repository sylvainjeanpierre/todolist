<?php include 'header.html'; ?>

<div class="base">
    <h1>To-do list</h1>

    <h2>New task</h2>
    <form action="router.php" method="get" class="new_task_form">
        <label for="new_task"></label>
        <input type="hidden" name="action" value="addTask">
        <input type="text" id="new_task" name="content">
        <input type="submit" value="Insert">
    </form>


    <h3>Tasks</h3>

    <ul>
        <?php foreach ($results as $result) { ?>
            <li class="tasks_line">
                <?= $result['content']; ?>
                <form action="router.php" method="get">
                    <input type="hidden" name="action" value="deleteTask">
                    <input type="hidden" name="id" value="<?= $result['id'];?>">
                    <input type="submit" value="Delete">
                </form>
            </li>
        <?php } ?>
    </ul>
</div>

<?php include 'footer.html'; ?>