<h1>USERS</h1>

<form action="{{ route('verify.useripadress') }}" method="post">
    @csrf
    <input type="text" name="nom" value="{{ old('nom') }}">
    <input type="submit" value="ENVOYER">
</form>
