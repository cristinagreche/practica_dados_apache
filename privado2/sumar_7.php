<?php

//session_start(); NO hace falta ya la abrimos en menu.php
include_once '../menu/menu.php';
if(!isset($_SESSION['logueado']))
{
    header('Location:../index.php');//redirigir a otra pagina
}