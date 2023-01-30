<form action="#" method="POST">
    <h1>Create a Todo</h1>
    @csrf
    <label for="todo">Todo</label>
    <input type="text" name="todo" placeholder="Enter your todo..." required>
    <button type="submit">Add Todo</button>
</form>