<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $site_title = 'Вход';
        require 'blocks/head.php' 
    ?>
</head>
<body >
    <?php require 'blocks/header.php'; ?>
    <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3">
        <h4>Войдите</h4>
        <form action="reg/reg.php" method="POST"></form>

        <label for="login">Логин</label>
        <input type="text" name="login" id="login" class="form-control">

        <label for="pass">Пароль</label>
        <input type="text" name="pass" id="pass" class="form-control">

        <button type="submit" class="btn btn-warning mt-5">Войти</button>
      </div>
      <?php require 'blocks/aside.php'; ?>
    </div>
  </main>
  <?php require 'blocks/footer.php'; ?>
</body>
</html>