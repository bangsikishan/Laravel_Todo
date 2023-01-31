<x-layout>
    <div id="edit-main">
        <form action="{{ route('todo.update', ['id' => $todo->id]) }}" method="POST" class="edit-form">
            <h1>Edit Todo</h1>
            @csrf
            @method('PUT')
            <label for="todo">Todo</label>
            <input type="text" name="todo" value="{{ $todo->todo }}" required>
            <button type="submit">Edit Todo</button>
        </form>
    </div>
</x-layout>