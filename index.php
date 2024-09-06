<?php
require 'tasks.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
   <style type="text/css">
       /* General styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1, h2 {
    color: #333;
}

.header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    background-color: white;
    margin: 10px 0;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Task Form */
form {
    display: flex;
    flex-direction: column;
    max-width: 400px;
    margin: 20px auto;
}

input[type="text"], textarea {
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* Logout Button */
.logout-btn {
    background-color: #f44336;
}

.logout-btn:hover {
    background-color: #e53935;
}

/* Links */
a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Task list */
li strong {
    font-size: 1.2em;
}

li p {
    margin: 5px 0;
    color: #555;
}

li span {
    font-weight: bold;
    color: #999;
}

   </style>
</head>
<body>
    <div class="header">
        <h1>Your To-Do List</h1>
        <!-- Logout Button -->
        <form action="logout.php" method="POST">
            <button type="submit" name="logout" class="logout-btn">Logout</button>
        </form>
    </div>

    <!-- Task Form -->
    <form action="tasks.php" method="POST">
        <input type="text" name="title" placeholder="Task title" required>
        <textarea name="description" placeholder="Task description"></textarea>
        <button type="submit" name="add_task">Add Task</button>
    </form>

    <!-- Task List -->
    <h2>Tasks</h2>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <strong><?= htmlspecialchars($task['title']) ?></strong>
                <p><?= htmlspecialchars($task['description']) ?></p>
                <?php if (!$task['completed']): ?>
                    <a href="tasks.php?complete=<?= $task['id'] ?>">Mark as completed</a>
                <?php else: ?>
                    <span>Completed</span>
                <?php endif; ?>
                <a href="tasks.php?delete=<?= $task['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- Task List -->
<h2>Tasks</h2>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <strong><?= htmlspecialchars($task['title']) ?></strong>
            <p><?= htmlspecialchars($task['description']) ?></p>
            <p>Created at: <?= date('m/d/Y g:i A', strtotime($task['created_at'])) ?></p>
            <?php if (!empty($task['completed_at'])): ?>
                <p>Completed at: <?= date('m/d/Y g:i A', strtotime($task['completed_at'])) ?></p>
            <?php endif; ?>
            <?php if (!$task['completed']): ?>
                <a href="tasks.php?complete=<?= $task['id'] ?>">Mark as completed</a>
            <?php else: ?>
                <span>Completed</span>
            <?php endif; ?>
            <a href="tasks.php?delete=<?= $task['id'] ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
