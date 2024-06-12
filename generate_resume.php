<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $job_titles = $_POST['job_title'];
    $employers = $_POST['employer'];
    $start_dates = $_POST['start_date'];
    $end_dates = $_POST['end_date'];
    $schools = $_POST['school'];
    $degrees = $_POST['degree'];
    $graduation_dates = $_POST['graduation_date'];

    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Currículo de $name</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='container'>
            <h1>Currículo de $name</h1>
            <h2>Dados Pessoais</h2>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $phone</p>
            <h2>Experiências de Trabalho</h2>";

    for ($i = 0; $i < count($job_titles); $i++) {
        echo "<div class='work-experience'>
                <p><strong>Título do Cargo:</strong> " . htmlspecialchars($job_titles[$i]) . "</p>
                <p><strong>Empresa:</strong> " . htmlspecialchars($employers[$i]) . "</p>
                <p><strong>Data de Início:</strong> " . htmlspecialchars($start_dates[$i]) . "</p>
                <p><strong>Data de Término:</strong> " . htmlspecialchars($end_dates[$i]) . "</p>
              </div>";
    }

    echo "<h2>Educação</h2>";

    for ($i = 0; $i < count($schools); $i++) {
        echo "<div class='education-entry'>
                <p><strong>Instituição:</strong> " . htmlspecialchars($schools[$i]) . "</p>
                <p><strong>Grau Acadêmico:</strong> " . htmlspecialchars($degrees[$i]) . "</p>
                <p><strong>Data de Graduação:</strong> " . htmlspecialchars($graduation_dates[$i]) . "</p>
              </div>";
    }

    echo "</div>
    </body>
    </html>";
}
?>