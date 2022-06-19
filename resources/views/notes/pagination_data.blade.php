<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-lg bg-white mb-8">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-weight-bold">
    <tr>
        <th class="bg-blue-100 border text-left px-8 py-4">Resource type</th>
        <th class="bg-blue-100 border text-left px-8 py-4">resource</th>
        <th class="bg-blue-100 border text-left px-8 py-4">content</th>
    </tr>
    </thead>
    <tbody id="note_list">
    @foreach($notes as $note)
        <tr>
            <td class="border px-8 py-4">{{ $note->resource_type }}</td>
            <td class="border px-8 py-4">{{ $note->resource_id }}</td>
            <td class="border px-8 py-4">{{ $note->content }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="mt-12 text-left mb-12 pagination">
    {!! $notes->links() !!}
</div>

