<h1>Jau greitai!</h1>
<p>
    Gauk pranešiąm kai startuosim!
</p>
<form action="{{ route('subscribe') }}" method="post">
    @csrf
    <input type="text" name="email">
    <input type="submit" value="Pranešti">
</form>


