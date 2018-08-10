<?php
unset($_SESSION['email']);
unset($_SESSION['usuario']);

header("Location: http://localhost/noticias");
die();