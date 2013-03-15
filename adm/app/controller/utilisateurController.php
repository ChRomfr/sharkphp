<?php
if( !defined('IN_ADMIN') ) exit;
if( !defined('IN_VA') ) exit;
if( ADM_USER_LEVEL > $_SESSION['utilisateur']['isAdmin']) exit;

class utilisateurController extends AdmUtilisateurController{}