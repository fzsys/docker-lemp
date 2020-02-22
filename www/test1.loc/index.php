<?php

if ($link = mysqli_connect('mysql', 'admin', 'adminpass', 'test')) {
	echo 'database connection established<br>';
	echo 'virtual host test1.loc is ready to handle requests';
} else {
	echo 'database connection error';
}
