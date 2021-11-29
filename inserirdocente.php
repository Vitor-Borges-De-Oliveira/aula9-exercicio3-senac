<?php

include('conexaodocente.php');

$docente="Juan";
$especialidade="PHP";
$salhora=29.98;
$disponibilidade="8 horas";

$sql = "insert into tbldocente (docente,especialidade,salhora,disponibilidade)
        values ('$docente','$especialidade','$salhora','$disponibilidade')";

$connect->query($sql);