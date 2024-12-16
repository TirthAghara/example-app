<html>
    <form action="/sess" method="POST">
        @csrf
        <input type="text" name="user" placeholder="enter user name" />
        <input type="password" name="password" placeholder="enter user password" />
        <button type="submit">Login</button>
    </form>
</html>