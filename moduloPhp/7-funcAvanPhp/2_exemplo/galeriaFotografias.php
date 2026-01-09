<html>

    <body>
        <p>
            <?php
                function getDir($dir='.', $recursivo = false){

                    $files = array();

                    if(is_dir($dir)){

                        $fh = opendir($dir);

                        while (($file = readdir($fh)) !== false){

                            if(!in_array($file, array('.', '..'))){

                                $filepath = $dir .'/' .$file;

                                if( is_dir($filepath) && $recursivo) {

                                    array_push($files, $filepath);

                                    $files = array_merge($files, getDir($filepath, $recursivo));

                                } else{    
                                    array_push($files, $filepath);
                                }
                            }
                        }
                    closedir($fh);

                } else {
                    return false;
                }

                return $files;
            }

            $files = getDir('.', true);
            print_r($files);

            ?>
        </p>
    </body>
</html>