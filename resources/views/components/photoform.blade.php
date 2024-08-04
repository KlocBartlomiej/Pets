<br/><br/><br/>
<form {{ $attributes }} method="POST">
    @csrf
    <h2>{{ $slot }}</h2><br/>
    <h3>Provide an ID of your pet:</h3><br/>
    <input type="text" name="id" /><br/>
    <h3>Your pet's photo url:</h3>
    <input type="text" name="url" /><br/><br/><br/>
    <input type="submit" value="Execute"></input>
</form>