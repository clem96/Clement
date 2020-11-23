<?php
include 'Head.php';
ProduitsManager::delete($$_POST);
header("location: ../../index.php");
