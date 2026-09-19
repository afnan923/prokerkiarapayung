<?php
$dir = new RecursiveDirectoryIterator('resources/views');
$ite = new RecursiveIteratorIterator($dir);
$files = new RegexIterator($ite, '/.*\.blade\.php$/', RegexIterator::GET_MATCH);

foreach($files as $file) {
    $path = $file[0];
    $content = file_get_contents($path);
    
    $content = str_replace('Kiarapayung', 'Kiara Payung', $content);
    $content = str_replace('KIARAPAYUNG', 'KIARA PAYUNG', $content);
    
    $content = str_replace('@kiara payung.desa.id', '@kiarapayung.desa.id', $content);
    $content = str_replace('2sKiara Payung', '2sKiarapayung', $content);
    $content = str_replace('2sKiara%20Payung', '2sKiarapayung', $content);
    
    file_put_contents($path, $content);
}
echo "Done";
