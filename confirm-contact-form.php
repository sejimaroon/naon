<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inquiryType = $_POST['inquiry-type'];
    $name = $_POST['name'];
    $kana = $_POST['kana'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sources = isset($_POST['source']) ? implode(", ", $_POST['source']) : '';
    $message = $_POST['message'];
    $privacy = $_POST['privacy'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>
<body>
    <h1>お問い合わせ内容の確認</h1>
    <form action="submit-contact-form.php" method="POST">
        <div class="form-group">
            <label>お問い合わせの種類:</label><br>
            <?php echo htmlspecialchars($inquiryType); ?>
            <input type="hidden" name="inquiry-type" value="<?php echo htmlspecialchars($inquiryType); ?>">
        </div>
        <div class="form-group">
            <label>名前:</label><br>
            <?php echo htmlspecialchars($name); ?>
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
        </div>
        <div class="form-group">
            <label>フリガナ:</label><br>
            <?php echo htmlspecialchars($kana); ?>
            <input type="hidden" name="kana" value="<?php echo htmlspecialchars($kana); ?>">
        </div>
        <div class="form-group">
            <label>会社名:</label><br>
            <?php echo htmlspecialchars($company); ?>
            <input type="hidden" name="company" value="<?php echo htmlspecialchars($company); ?>">
        </div>
        <div class="form-group">
            <label>メールアドレス:</label><br>
            <?php echo htmlspecialchars($email); ?>
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        </div>
        <div class="form-group">
            <label>電話番号:</label><br>
            <?php echo htmlspecialchars($phone); ?>
            <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
        </div>
        <div class="form-group">
            <label>何を見て当社を知りましたか？:</label><br>
            <?php echo htmlspecialchars($sources); ?>
            <input type="hidden" name="source" value="<?php echo htmlspecialchars($sources); ?>">
        </div>
        <div class="form-group">
            <label>お問い合わせ内容:</label><br>
            <?php echo nl2br(htmlspecialchars($message)); ?>
            <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
        </div>
        <div class="form-group">
            <input type="hidden" name="privacy" value="<?php echo htmlspecialchars($privacy); ?>">
        </div>
        <div class="form-group">
            <button type="submit">送信する</button>
        </div>
    </form>
</body>
</html>

<?php
} else {
    echo "無効なリクエストです。";
}
?>
