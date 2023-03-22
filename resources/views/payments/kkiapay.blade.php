<!-- resources/views/payment.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Paiement</title>
    <script src="https://cdn.kkiapay.me/kkiapay.js"></script>
</head>
<body>
    <h1>Choisissez votre moyen de paiement</h1>
    <div>
        <button onclick="payWithMoMo()">MoMo</button>
        <button onclick="payWithCard()">Carte bancaire</button>
    </div>
    <form id="payment-form">
        <input type="hidden" name="session_id" value="{{ $session_id }}">
        <input type="hidden" name="public_key" value="{{ $public_key }}">
    </form>
    <script>
        function payWithMoMo() {
            Kkiapay.pay({
                public_key: document.querySelector('input[name=public_key]').value,
                session_id: document.querySelector('input[name=session_id]').value,
                method: 'momo'
            }, function (response) {
                if (response.status === 'successful') {
                    window.location.href = "{{ route('payment.callback') }}?session_id=" + response.session_id;
                } else {
                    window.location.href = "{{ route('payment.cancel') }}?session_id=" + response.session_id;
                }
            });
        }

        function payWithCard() {
            Kkiapay.pay({
                public_key: document.querySelector('input[name=public_key]').value,
                session_id: document.querySelector('input[name=session_id]').
