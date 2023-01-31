<x-layout>
    <div id="main">
        <div class="table">
            <x-table :todos='$todos' />
        </div>
        <div class="form">
            <x-form />
        </div>
    </div>
</x-layout>