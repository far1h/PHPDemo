<?php
include("partials/header.php");
include("partials/notifications.php");
include("config/Database.php");
include("classes/Task.php");

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$database = new Database();

$db = $database->connect();

$todo = new Task($db);

if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_POST["add_task"])){
        $todo->setTask($_POST["task"]);
        $todo->create();
    } elseif (isset($_POST["complete_task"])){
        $todo->complete($_POST['id']);
    } elseif (isset($_POST['undo_complete_task'])){
        $todo->UndoComplete($_POST['id']);
    }
}

$tasks = $todo->read();
?>

<!-- Main Content Container -->
<div class="container">
    <h1>Todo App</h1>

    <!-- Add Task Form -->
    <form method="POST">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit" name="add_task">Add Task</button>
    </form>

    <!-- Display Tasks -->
    <ul>
        <?php while($task = $tasks->fetch_assoc()): ?>
        <li class="completed">
            <span class="<?php echo $task['is_completed'] ? 'completed' : ''?>">
                <?php echo $task['task']; ?>
            </span>
            <div>
                <?php if(!$task['is_completed']): ?>
                <!-- Complete Task -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $task['id']?>">
                    <button class="complete" type="submit" name="complete_task">Complete</button>
                </form>
                
                <?php else : ?>
                <!-- Undo Completed Task -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $task['id']?>">
                    <button class="undo" type="submit" name="undo_complete_task">Undo</button>
                </form>
                <?php endif;    ?>
                <!-- Delete Task -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="1">
                    <button class="delete" type="submit" name="delete_task">Delete</button>
                </form>
            </div>
        </li>

        <li>
            <span>Another Task</span>
            <div>
                <!-- Complete Task -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="2">
                    <button class="complete" type="submit" name="complete_task">Complete</button>
                </form>

                <!-- Delete Task -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="2">
                    <button class="delete" type="submit" name="delete_task">Delete</button>
                </form>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>
</div>

<?php
include("partials/footer.php");
?>