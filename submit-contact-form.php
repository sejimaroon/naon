<?php
// エラーレポートを有効にする
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inquiryType = isset($_POST['inquiry-type']) ? $_POST['inquiry-type'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $kana = isset($_POST['kana']) ? $_POST['kana'] : '';
    $company = isset($_POST['company']) ? $_POST['company'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $sources = isset($_POST['source']) ? implode(", ", $_POST['source']) : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $privacy = isset($_POST['privacy']) ? $_POST['privacy'] : '';

    $to = "39391127z@gmail.com"; // メールを受信するメールアドレスを設定してください
    $subject = "お問い合わせフォームからのメッセージ";
    $body = "お問い合わせの種類: $inquiryType\n"
          . "名前: $name\n"
          . "フリガナ: $kana\n"
          . "会社名: $company\n"
          . "メールアドレス: $email\n"
          . "電話番号: $phone\n"
          . "何を見て当社を知りましたか？: $sources\n"
          . "お問い合わせ内容:\n$message\n";
    $headers = "From: $email";

    // メール送信の成功/失敗を表示
    if (mail($to, $subject, $body, $headers)) {
        echo "お問い合わせ内容を送信しました。";
    } else {
        echo "メール送信に失敗しました。";
    }
} else {
    echo "無効なリクエストです。";
}
?>
