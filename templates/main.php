<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets//css/style.css">
    <title>Document</title>
</head>

<body>
    <main class="main-section">
        <section class="add-section">
            <form action="/app/add.php" method="POST" autocomplete="off">
                <?php
                if (isset($_GET["mess"]) && $_GET["mess"] == 'error') {
                ?>
                    error
                <?php
                }
                ?>
                <input type="text" name="title" placeholder="This fild is required" />
                <button type="submit">Add &nbsp; <span>&#43;</span></button>
            </form>
        </section>
        <section class="show-todo-section">
            <?php
            $todo = getDB()->query("SELECT * FROM todos");

            foreach ($todo as $row) {
                echo "
                <div class='todo-item'>
                    <span id='{$row['id']}' class='remove-to-do'>x</span>
                ";

                if ($row['checked']) {
                    echo "
                    <input type='checkbox' class='check-box' checked />
                    <h2 class='checked'>{$row["title"]}</h2>
                    ";
                } else {
                    echo "
                    <input type='checkbox' class='check-box' />
                    <h2>{$row["title"]}</h2>
                    ";
                }

                echo "
                   <small>created: {$row["date_time"]}</small>
                </div>
                ";
            }
            ?>
        </section>
    </main>
</body>

</html>