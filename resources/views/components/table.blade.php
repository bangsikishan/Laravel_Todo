@props(['todos'])

<table>
    <tr>
        <th>ID</th>
        <th class="todo">Todo</th>
        <th>Actions</th>
    </tr>

    @isset($todos)
        @foreach ($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->todo }}</td>
                <td class="actions">
                    <a href="{{ route('todo.edit', ['id' => $todo->id]) }}">
                        <span class="material-symbols-outlined">
                            edit
                        </span>
                    </a>
                    <form action="{{ route('todo.delete', ['id' => $todo->id]) }}" method="POST" class="delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endisset
</table>
{{ $todos->links() }}