<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h1>Feedback Form</h1>

    <form method="POST" action="/feedback">
        @csrf
        <label for="message">Your Feedback</label>
        <textarea id="message" name="message"></textarea>
        <button type="submit">Send Feedback</button>
    </form>
</body>
</html>
