<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Add Task
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("INSERT INTO tasks (user_id, title, description) VALUES (:user_id, :title, :description)");
    $stmt->execute(['user_id' => $user_id, 'title' => $title, 'description' => $description]);
    header("Location: index.php");
}

// Mark as Completed
if (isset($_GET['complete'])) {
    $task_id = $_GET['complete'];
    $stmt = $pdo->prepare("UPDATE tasks SET completed = 1 WHERE id = :id AND user_id = :user_id");
    $stmt->execute(['id' => $task_id, 'user_id' => $user_id]);
    header("Location: index.php");
}

// Delete Task
if (isset($_GET['delete'])) {
    $task_id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM tasks WHERE id = :id AND user_id = :user_id");
    $stmt->execute(['id' => $task_id, 'user_id' => $user_id]);
    header("Location: index.php");
}

// Fetch Tasks
$stmt = $pdo->prepare("SELECT * FROM tasks WHERE user_id = :user_id");
$stmt->execute(['user_id' => $user_id]);
$tasks = $stmt->fetchAll();
?>
