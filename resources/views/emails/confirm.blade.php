<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>註冊確認連結</title>
</head>

<body>
    <h1>感謝您的註冊</h1>

    <p>
        點擊下方連結完成註冊：
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        如果不是您本人，請忽略此郵件
    </p>
</body>

</html>
