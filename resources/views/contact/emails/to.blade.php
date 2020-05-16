{{ $content['to_name'] }} 様<br>
<br>
この度はお問い合わせいただき誠にありがとうございます。<br>
お客様からのお問い合わせを受付けましたので、ご連絡いたします。<br>
<br>
============================<br>
<br>
お客様のお名前：{{ $content['to_name'] }} 様<br>
<br>
お客様の電話番号：{{ $content['tel'] }} <br>
<br>
お客様のメールアドレス：{{ $content['to'] }} <br>
<br>

件名：{{ $content['sub'] }} <br>
<br>
お問い合わせ内容：<br>
<?php echo nl2br(htmlspecialchars($content['body'])); ?><br>
<br>
============================<br>
<br>
内容を確認のうえ、担当よりご回答いたします。<br>
<br>
