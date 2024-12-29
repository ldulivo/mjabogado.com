<?php

class serviceApi {
  protected static $smtpHost;
  protected static $smtpPort;
  protected static $smtpUser;
  protected static $smtpPass;
  protected static $to;

  protected static $nombre;
  protected static $contacto;
  protected static $mensajeTexto;

  public static function api($url = null, $env = null) {
    if ($env) {
      self::$smtpHost = $env["email"]["smtpHost"];
      self::$smtpPort = $env["email"]["smtpPort"];
      self::$smtpUser = $env["email"]["smtpUser"];
      self::$smtpPass = $env["email"]["smtpPass"];
      self::$to = $env["email"]["fromEmail"];
    }
  }

  public static function get() {
    self::getData();

    $subject = "Nuevo mensaje desde la web";
    $message = "
    <html>
    <head>
      <title>Nuevo contacto</title>
    </head>
    <body>
      <h2>Nuevo mensaje de contacto</h2>
      <p><strong>Nombre:</strong> " . self::$nombre . "</p>
      <p><strong>Teléfono o Correo:</strong> " . self::$contacto . "</p>
      <p><strong>Mensaje:</strong> " . self::$mensajeTexto . "</p>
    </body>
    </html>
    ";
    // Cabeceras
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: contacto@mjabogado.com\r\n";
    $headers .= "Reply-To: ". self::$contacto . "\r\n";

    // Envía el correo usando SMTP
    $socket = fsockopen(self::$smtpHost, self::$smtpPort, $errno, $errstr, 30);

    if (!$socket) {
      echo json_encode(["success" => false, "message" => "Error al conectar con el servidor SMTP: $errno - $errstr"]);
      exit;
    }

    fputs($socket, "EHLO " . self::$smtpHost . "\r\n");
    fputs($socket, "AUTH LOGIN\r\n");
    fputs($socket, base64_encode(self::$smtpUser) . "\r\n");
    fputs($socket, base64_encode(self::$smtpPass) . "\r\n");
    fputs($socket, "MAIL FROM: <" . self::$smtpUser . ">\r\n");
    fputs($socket, "RCPT TO: <" . self::$to . ">\r\n");
    fputs($socket, "DATA\r\n");
    fputs($socket, "Subject: $subject\r\n");
    fputs($socket, "$headers\r\n$message\r\n.\r\n");
    fputs($socket, "QUIT\r\n");
    fclose($socket);

    // Respuesta JSON
    echo json_encode(["success" => true, "message" => "Correo enviado correctamente."]);
  }

  public static function getData() {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['nombre'], $data['contacto'], $data['mensaje'])) {
        echo json_encode(["success" => false, "message" => "Faltan datos en el formulario."]);
        exit;
    }

    self::$nombre = htmlspecialchars($data['nombre']);
    self::$contacto = htmlspecialchars($data['contacto']);
    self::$mensajeTexto = htmlspecialchars($data['mensaje']);
    return;
  }
}

?>
