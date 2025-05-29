<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body>
    <h2>You received a new message from:</h2>
    
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $messageText }}</p>
</body>
</html>