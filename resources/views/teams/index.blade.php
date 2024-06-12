<h1>Teams</h1>
<ul>
    @foreach($teams as $team)
        <li>{{ $team->name }}</li>
    @endforeach
</ul>