<!DOCTYPE html>
<html>
<body>
<h2>Welcome to the site {{ $user->name }}</h2>
<p>Your registered email-id is {{ $user->email }} , Please click on the below link to verify your email account</p>
<a href="{{ route('user.verify', ['token' => $user->verification_token]) }}">Verify Email</a>
</body>
</html>
