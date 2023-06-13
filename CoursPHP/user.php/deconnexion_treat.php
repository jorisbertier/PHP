<?php
session_start();
session_destroy();
header('Location: exo_connexion.php');