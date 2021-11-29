<?php

require_once('conexaodocente.php');

$sql = "delete from tbldocente where iddocente=4";

$connect->query($sql);