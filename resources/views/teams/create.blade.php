<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    <label for="name">Team Name</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Create Team</button>
</form>