<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Notification</title>
</head>
<body>
    <p>Có một tin nhắn liên hệ mới từ:</p>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Message:</strong> {{ $contact->message }}</p>
</body>
</html>