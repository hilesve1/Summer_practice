<?php
      if($_COOKIE['log'] == ''){
          header('Location: /reg.php');
          exit();
      }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $site_title = 'Добавление статьи';
        require 'blocks/head.php' 
    ?>
</head>
<body >
    <?php require 'blocks/header.php'; ?>
    <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3">
        <h4>Форма Добавления статьи</h4>
        <form action="" method="post">
        <label for="title">Заголовок статьи</label>
        <input type="text" name="title" id="title" class="form-control">

        <label for="intro">Интро статьи</label>
        <textarea type="text" name="intro" id="intro" class="form-control"></textarea>

        <label for="text">Основной текст статьи</label>
        <textarea type="text" name="text" id="text" class="form-control"></textarea>

        <div class="alert alert-danger mt-2" id="errorBlock"></div>
       
        <button type="button" id="article_send" class="btn btn-warning mt-5">Добавить</button>
        </form>
      </div>
      <?php require 'blocks/aside.php'; ?>
    </div>
  </main>
  <?php require 'blocks/footer.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script> 
    $('#article_send').click(function(){
      var title = $('#title').val();
      var intro = $('#intro').val();
      var text = $('#text').val();

      $.ajax({
        url: 'ajax/add_article.php',
        type: 'POST',
        cache: false,
        data: {'title': title, 'intro': intro, 'text': text },
        dataType: 'html', 
        success: function(data){
          if(data == 'OK'){
            document.location.reload(true);
          }
           else{
            $('#earticle_send').show();
            $('#article_send').text(data);

           }
        }
      })/*.done(function () {
                        location.href = '/auth.php';
                });*/

    });
</script>

</body>
</html>

