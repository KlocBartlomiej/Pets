<br/><br/><br/>
<form {{ $attributes }} method="POST">
    @csrf
    <h2>{{ $slot }}</h2><br/>
    <h3>{{ $field }}</h3>
    <input type="text" name="string" /><br/><br/><br/>
    <input type="submit" value="Execute"></input>
</form>