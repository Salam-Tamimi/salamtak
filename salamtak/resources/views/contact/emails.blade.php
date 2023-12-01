<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Received</title>
</head>
<body>
    <p>Hello Admin,</p>

    <p>You have received a new contact form submission with the following details:</p>

    <ul>
        <li><strong>Name:</strong> {{ $contact->name }}</li>
        <li><strong>Email:</strong> {{ $contact->email }}</li>
        <li><strong>Subject:</strong> {{ $contact->subject }}</li>
        <li><strong>Message:</strong> {{ $contact->message }}</li>
    </ul>

    <p>Thank you!</p>
</body>
</html>