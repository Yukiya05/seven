<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-offset-4 col-xs-4">
            <h1>お問い合わせ</h1>
            <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="お名前" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="メールアドレス" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="件名" value="">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="本文"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block">送信</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>