<?php
require_once '../../controller/Dokumen.php';

$file = $_GET['url'];

$implements = new Dokumen();
$result = $implements->download($file);