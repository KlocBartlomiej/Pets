<br/><br/><br/>
<form {{ $attributes }} method="POST">
    @csrf
    <h2>{{ $slot }}</h2><br/>
    <h3>Provide an ID of your pet:</h3><br/>
    <input type="text" name="id" /><br/>
    <h3>Category:</h3>
    <input type="text" name="category" /><br/>
    <h3>Your pet name:</h3>
    <input type="text" name="name" /><br/>
    <h3>Comma-separated tags:</h3>
    <input type="text" name="tags" /><br/>
    <h3>Status (available / pending / sold):</h3>
    <input type="text" name="status" /><br/><br/><br/>
    <input type="submit" value="Execute"></input>
</form>