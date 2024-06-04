<?php
$correctAnswers = array(
    "q1" => "1969",
    "q2" => "Vint Cerf",
    "q3" => "World Wide Web",
    "q4" => "1991",
    "q5" => "NCSA",
    "q6" => "Friendster",
    "q7" => "HyperText Transfer Protocol",
    "q8" => "1994",
    "q9" => "Tim Berners-Lee",
    "q10" => "Internet Service Provider"
);

$score = 0;
foreach ($correctAnswers as $key => $value) {
    if (isset($_POST[$key]) && $_POST[$key] == $value) {
        $score++;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado del Quiz</h1>
        <p>Has acertado <?php echo $score; ?> de 10 preguntas.</p>
        <p><a href="index.html">Volver a intentar</a></p>
    </div>
</body>
</html>
