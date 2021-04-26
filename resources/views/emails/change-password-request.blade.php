<!DOCTYPE html>
<html>
<body>
<h2>Kedves {{ $user->name }}!</h2>
<p>Egy adminisztrátor arra kérte, hogy változtassa meg az jelszavát. A lenti hivatkoásra kattintva megteheti ezt.</p>
<a href="{{ route('user.change-password', ['token' => $user->password_change_request_token]) }}">Jelszó módosítása</a>
</body>
</html>
