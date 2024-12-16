
@if ($errors->any())
@foreach ($errors->all() as $err)
    <li>{{$err}}</li>
@endforeach
@endif
<h1>user login</h1>
<form action="admin" method="POST">
    @csrf
    <input type="text" name="username">
    <span style="color: red">@error('username')
        {{$message}}
    @enderror</span>
    <input type="text" name="password">
    <span style="color: red">@error('password')
        {{$message}}
    @enderror</span>
    <button type="submit">Login</button>
</form>
