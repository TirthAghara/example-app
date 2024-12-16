<form action="uploadimage" method="POST" >
    @csrf
    <div>
        <label for="image">Choose Image:</label>
        <input type="file" name="image">
    </div>
    <button type="submit">Upload</button>
</form>
