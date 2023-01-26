<?php include 'header.html'; ?>

<div>
    <h1>Todo List</h1>

    <h2>New task</h2>
    <form action="/.php">
        <label for="new_task"></label>
        <input type="text" id="new_task" name="content"><br>
        <input type="submit" value="Save">
    </form>


    <h3>Tasks : </h3>

    <?php foreach ($results as $result) {?>
        <p><?= $result['content']; ?></p>
    <?php } ?>
</div>

<?php include 'footer.html'; ?>