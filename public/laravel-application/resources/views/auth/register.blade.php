

<form method="POST" action="{{ route('register') }}">
    @csrf
    Name:<br>
    <input type="text" name="name" id=""><br>
    Email:<br>
    <input type="email" name="email" id=""><br>
    Password:<br>
    <input type="password" name="password" id=""><br>
    Password_confirmation:<br>
    <input type="password" name="password_confirmation" id=""><br>
    <input type="submit" value="Save">
</form>
