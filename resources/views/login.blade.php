<form action="login" method="post">
    @csrf
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Submit</button>
</form>
