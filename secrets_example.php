<?php
# copy this file to secrets.php and adjust to your needs.
define('INSTANCE_KEY','set secred random string');
define('DB_CONNECTION','mysql:host=...;charset=utf8mb4');
define('DB_USER','db username');
define('DB_PASSWORD','db password')
define('BASE_URL','base url of instance without trailing /');
define('CERTIFICATE_SALT','secret random string');
define('EMAIL_ADDRESS','sending email address for registering and pw reset');
define('EMAIL_HOST','smtp hostname');
define('EMAIL_USER','smtp username');
define('EMAIL_PASSWORD','smtp password');


?>
