<?php
$phpQuestions = ["q1","q2","q3","q4","q5","q6","q7","q8","q9","q10","q11","q15","q16","q17","q19","q20"];
$wordpressQuestions = ["q1","q2","q3","q4","q5","q6","q7","q8","q9","q10","q11","q12"];
$mysqlQuestions = ["q1","q2","q3","q4","q5","q6"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Herolo - daniel bach solution </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .code{
            display: none;
        }
        .show-answer,.show-answer-wordpress,.show-answer-mysql,.show-results{
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Herolo - daniel bach solution</h1>
<h2>PHP</h2>
<ol>
    <?php foreach($phpQuestions as $phpQuestion) : ?>
        <li>
            <a href="php/php-<?=$phpQuestion?>.php"><?=$phpQuestion?></a> (<a class="show-answer" data-id="<?=$phpQuestion?>">Show answer</a> \ <a class="show-results" data-id="<?=$phpQuestion?>" data-url="php/php-<?=$phpQuestion?>.php">Show results</a>)
            <p class="code" id="<?=$phpQuestion?>-answer">
                <?php
                highlight_file('php/php-'.$phpQuestion.'.php');
                ?>
            </p>
            <p class="code" id="<?=$phpQuestion?>-result"></p>
        </li>
    <?php endforeach; ?>
</ol>

<h2>Wordpress</h2>
<ol>
    <?php foreach($wordpressQuestions as $wordpressQuestion) : ?>
        <li>
            <a href="wordpress/wordpress_<?=$wordpressQuestion?>.php"><?=$wordpressQuestion?></a> (<a class="show-answer-wordpress" data-id="<?=$wordpressQuestion?>">Show answer</a>)
            <p class="code" id="<?=$wordpressQuestion?>-answer-wordpress">
                <?php
                echo file_get_contents('wordpress/wordpress_'.$wordpressQuestion.'.txt');
                ?>
            </p>
            <p class="code" id="<?=$wordpressQuestion?>-result"></p>
        </li>
    <?php endforeach; ?>
</ol>
<h2>Mysql</h2>
<ol>
    <?php foreach($mysqlQuestions as $mysqlQuestion) : ?>
        <li>
            <a href="mysql/mysql_<?=$mysqlQuestion?>.php"><?=$mysqlQuestion?></a> (<a class="show-answer-mysql" data-id="<?=$mysqlQuestion?>">Show answer</a>)
            <p class="code" id="<?=$mysqlQuestion?>-answer-mysql">
                <?php
                echo file_get_contents('mysql/mysql_'.$mysqlQuestion.'.sql');
                ?>
            </p>
        </li>
    <?php endforeach; ?>
</ol>
<script>
    $(".show-answer").click(function(){
        var id = $(this).data("id");
        $("#"+id+"-answer").toggle();
    });
    $(".show-answer-wordpress").click(function(){
        var id = $(this).data("id");
        $("#"+id+"-answer-wordpress").toggle();
    });
    $(".show-answer-mysql").click(function(){
        var id = $(this).data("id");
        $("#"+id+"-answer-mysql").toggle();
    });
    $(".show-results").click(function(){
        var id = $(this).data("id");
        var url = $(this).data("url");
        $.ajax({
            url: url
        }).done(function(res) {
            $("#"+id+"-result").html(res);
            $("#"+id+"-result").toggle();
        });
    })



</script>
</body>
</html>
