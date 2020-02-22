<?php
echo 'virtual host test1.loc is ready to handle requests<br>';

if ($link = mysqli_connect('mysql', 'admin', 'adminpass', 'test')) {
	echo 'database connection established';
} else {
	echo 'database connection error';
}
