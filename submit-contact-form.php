<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // エラーメッセージを表示するための設定
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // フォームデータの取得とエスケープ処理
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $kana = isset($_POST['kana']) ? htmlspecialchars($_POST['kana']) : '';
    $company = isset($_POST['company']) ? htmlspecialchars($_POST['company']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $inquiryType = isset($_POST['inquiry-type']) ? htmlspecialchars($_POST['inquiry-type']) : '';
    $source = isset($_POST['source']) ? implode(", ", $_POST['source']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    $privacy = isset($_POST['privacy']) ? "同意済み" : "未同意";

    // メール送信先のアドレスを設定
    $to = "39391127z@gmail.com"; // 自分のメールアドレスに変更

    // メールの件名
    $subject = "お問い合わせがありました";

    // メール本文
    $body = "お問い合わせの種類: " . $inquiryType . "\n";
    $body .= "名前: " . $name . "\n";
    $body .= "フリガナ: " . $kana . "\n";
    $body .= "会社名: " . $company . "\n";
    $body .= "メールアドレス: " . $email . "\n";
    $body .= "電話番号: " . $phone . "\n";
    $body .= "知ったきっかけ: " . $source . "\n\n";
    $body .= "お問い合わせ内容:\n" . $message . "\n\n";
    $body .= "プライバシーポリシーに同意: " . $privacy;

    // メールのヘッダー
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain;charset=utf-8\r\n";

    // メール送信
    if (mail($to, $subject, $body, $headers)) {
        echo "お問い合わせを受け付けました。";
    } else {
        echo "メールの送信中にエラーが発生しました。";
    }
} else {
    echo "無効なリクエストです。";
}

