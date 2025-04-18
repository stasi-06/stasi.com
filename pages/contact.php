<?php include '../includes/header.php'; ?>

<main>
    <h1>Контакты</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $message = htmlspecialchars(trim($_POST["message"]));

        if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
            echo "<p style='color: green;'>Спасибо, $name! Ваше сообщение получено.</p>";
        } else {
            echo "<p style='color: red;'>Пожалуйста, заполните все поля корректно.</p>";
        }
    }
    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Имя" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <textarea name="message" placeholder="Сообщение" required></textarea><br>
        <button type="submit">Отправить</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>

