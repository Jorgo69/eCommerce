<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
</head>
<body>
    <form method="POST" action="/payment">
        @csrf
        <label for="amount">Amount:</label>
        <input type="text" name="amount">
        <button type="submit">Pay</button>
    </form>
</body>
</html>
