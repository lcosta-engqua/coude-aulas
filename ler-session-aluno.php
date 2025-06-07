<?php
session_start();
echo "<pre>";
print_r($_SESSION['aluno']);
print_r($_SESSION['senha']);
echo "</pre>";