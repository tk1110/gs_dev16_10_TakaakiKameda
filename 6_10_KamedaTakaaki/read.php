<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <title>アンケート</title>
    </head>

    <body>

        <table border="1">

            <?php

                // XSS対策
                function h ($value) {
                    return htmlspecialchars($value,ENT_QUOTES);
                }


                $filename = 'data/data.txt';

                // ファイルオープン
                $fp = fopen($filename, 'r');

                // $ct=0;

                // while(!feof($result)){
                //     $line = fgets($result);
                //     if (trim($line) != null){
                //         $myarray = explode(",",$line);
                //         print "<tr>\n";
                //         foreach($myarray as $substr) {
                //             print "<td>$substr</td>";
                //          }
                //         print "<tr>\n";
                //      }
                // }

                // ループ処理
                while (!feof($fp)) {

                    $line = fgets($fp);

                    if (trim($line) != null){
                        list($date,$name,$age,$location,$condition,$free) = explode("\t",$line);
                        print "<tr>\n";
                        print "<td>$date</td><td>$name</td><td>$age</td><td>$location</td><td>$condition</td><td>$free</td>\n";
                        print "</tr>\n";
                    }
                    // // 変数に格納
                    // $txt = fgets($result);
                
                    // // 変数の中身をechoで出力
                    // echo h($txt).'<br>';
                
                }
                
                // fcloseでファイルを閉じる
                fclose($result);

            ?>

        </table>

    </body>
</html>