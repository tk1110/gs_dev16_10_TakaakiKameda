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

    <div class="main">
        <div class="form-title">
                <p>コロナウィルスに関するアンケート</p>
        </div>

        <div class="questionnaire-form">


            <form action="write.php"  method="post">
                <dl class="flexbox">
                    <dt class="left">お名前</dt>
                    <dd class="right"><input type="text" name="name" size="25"></dd>
                </dl>

                <dl class="flexbox">
                <dt class="left">年代</dt>
                    <dd class="right">
                        <select name="age" style="width:200px;">
                            <option value="">選択してください</option>
                            <option value="10代">10代</option>
                            <option value="20代">20代</option>
                            <option value="30代">30代</option>
                            <option value="40代">40代</option>
                            <option value="50代">50代</option>
                            <option value="60代">60代</option>
                            <option value="70代">70代</option>
                            <option value="80代">80代</option>
                            <option value="90代">90代</option>
                        </select>
                    </dd>
                </dl>

                <dl class="flexbox">
                <dt class="left">お住まい</dt>
                    <dd class="right">
                        <select name="location" style="width:200px;">>
                            <option value="">選択してください</option>
                            <option value="東京都">東京都</option>
                            <option value="千葉県">千葉県</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="茨城県">茨城県</option>
                        </select>
                    </dd>
                </dl>

                <dl class="flexbox">
                <dt class="left">体調について</dt>
                <dd class="right fontsize">
                    <span><input type="checkbox" class="cbox" name="condition[]" value="健康である">健康である</span><br>
                    <span><input type="checkbox" class="cbox" name="condition[]" value="発熱がある">発熱がある</span><br>
                    <span><input type="checkbox" class="cbox" name="condition[]" value="倦怠感がある">倦怠感がある</span><br>
                    <span><input type="checkbox" class="cbox" name="condition[]" value="その他、風邪に似た症状がある">その他、風邪に似た症状がある</span><br>
                </dd>
                </dl>

                <dl class="flexbox">
                    <dt class="left">自由記入欄</dt>
                    <dd class="right">
                        <textarea cols="40" rows="10" name="free"></textarea>
                    </dd>
                </dl>

                <div class="submitbox">
                     <p><input type="submit" value="送信"></p>
                </div>
            </form>
        </div>



    </div>
    
</body>
</html>