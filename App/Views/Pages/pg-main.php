<!doctype html>
<html lang="ru">
<head>
    <title>KSP Project</title>
    <?php require_once "App/Views/Components/cp-includes.php"; ?>
</head>
<body>
    <div class="wrapper">
        <h1 class="fd-5">
            Локальная БД
        </h1>
        <?php
            include_once "App/Views/Components/cp-form-search.php";
            use App\API\Classes\Users;
            Users::activate();

            if (isset($_GET['search_go'])) {
                if ($_GET['user_id'] === "") {
                    echo "<div class='alert alert-danger'>".
                        "<p class='alert-text'>Запрос не удался. Недопустипое значение [ ПУСТОТА ] в поле ввода".
                        "</p>".
                        "</div>";
                    die();
                }
                foreach (Users::$db as $item) {
                    if ($item['id'] === $_GET['user_id']) {
                        Users::getUser($_GET['user_id']);
                        die();
                    }
                }
                echo "<div class='alert alert-danger'>".
                        "<p class='alert-text'>Запрос не удался. Пользователя с айди [ ".$_GET['user_id'].
                        " ] не найдено!".
                        "</p>".
                        "</div>";
                die();

            }
            if (isset($_GET['all_users'])) {
                Users::getUsers();
            }

        ?>
    </div>
</body>
</html>