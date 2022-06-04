<?php



        /**
         * User image
         *
         * @method array image()
         * @static
         * @param array $file_post
         * @return array
         */
        function image(array $file_post): array
        {
            $file_array = array();
            $file_keys = array_keys($file_post);
            for ($i = 0; $i < count($file_post['name']); $i++)
            :
                foreach ($file_keys as $key)
                :
                    $file_array[$i][$key] = $file_post[$key][$i];
                endforeach;
            endfor;
            return $file_array;
        }
        /**
         * Image upload method
         *
         * @final
         * @method string|null imageUpload()
         * @static
         * @param array $img
         * @return string|null
         */
        function imageUpload(array $img): ?string
        {
            $fileUploadErrors = array();
            if (isset($img))
            :
                $file_img = image($img);
                
                for ($i = 0; $i < count($file_img); $i++)
                :
                    if ($file_img[$i]['error'])
                    :
                        die
                        (
                            "{$file_img[$i]['name']} - {$fileUploadErrors[$file_img[$i]['error']]}"
                        );
                    else
                    :
                        $extensions = array(
                            'jpg','png','jpeg','gif',
                            'JPG','PNG','JPEG','GIF'
                        );
                        $file_ext = explode(
                            '.',
                            $file_img[$i]['name']
                        );
                        $file_ext = end(
                            $file_ext
                        );
                        if (!in_array($file_ext, $extensions))
                        :
                            die
                            (
                                "{$file_img[$i]['name']} - Invalid file extension!"
                            );
                        else
                        :
                            $newNameImg = sha1(
                                $file_img[$i]['name']
                            );
                           move_uploaded_file(
                                $file_img[$i]['tmp_name'],
                                "C:/xampp/htdocs/ChatDog-logincss_exemplo/img/{$newNameImg}.{$file_ext}"
                            );
                        endif;
                    endif;
                    return "{$newNameImg}.{$file_ext}";
                endfor;
            else
            :
                return NULL;
            endif;

            /** $imagem = Image::imageUpload($_FILES['imagem']) */
        }
    
?>

