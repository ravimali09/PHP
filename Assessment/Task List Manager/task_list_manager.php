<?php
session_start();

// Initialize the task list if it's not already in the session
if (!isset($_SESSION['taskList'])) {
    $_SESSION['taskList'] = [];
}

// Function to add a task
function addTask($task) {
    $_SESSION['taskList'][] = $task;
}

// Function to delete a task
function deleteTask($taskIndex) {
    if (isset($_SESSION['taskList'][$taskIndex])) {
        array_splice($_SESSION['taskList'], $taskIndex, 1);
    }
}

// Function to clear all tasks
function clearAllTasks() {
    $_SESSION['taskList'] = [];
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addTask'])) {
        // Add task
        $task = htmlspecialchars(trim($_POST['task']));
        if (!empty($task)) {
            addTask($task);
        }
    } elseif (isset($_POST['deleteTask'])) {
        // Delete task
        $taskIndex = (int)$_POST['taskIndex'];
        deleteTask($taskIndex);
    } elseif (isset($_POST['clearAllTasks'])) {
        // Clear all tasks
        clearAllTasks();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .task-list {
            margin-top: 20px;
        }
        .task-item {
            margin-bottom: 10px;
        }
        .task-item span {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Task List Manager</h1>

    <!-- Add Task Form -->
    <form method="POST">
        <label for="task">New Task:</label>
        <input type="text" name="task" id="task" required>
        <button type="submit" name="addTask">Add Task</button>
    </form>

    <!-- Task List Display -->
    <div class="task-list">
        <h2>Task List</h2>
        <?php if (empty($_SESSION['taskList'])): ?>
            <p>No tasks available.</p>
        <?php else: ?>
            <?php foreach ($_SESSION['taskList'] as $index => $task): ?>
                <div class="task-item">
                    <span><?php echo htmlspecialchars($task); ?></span>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="taskIndex" value="<?php echo $index; ?>">
                        <button type="submit" name="deleteTask">Delete</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Clear All Tasks -->
    <?php if (!empty($_SESSION['taskList'])): ?>
        <form method="POST">
            <button type="submit" name="clearAllTasks">Clear All Tasks</button>
        </form>
    <?php endif; ?>

</body>
</html>
