document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('note-form');
    const input = document.getElementById('note-input');
    const list = document.getElementById('notes-list');

    const fetchNotes = async () => {
        const response = await fetch('../api/get_notes.php');
        const notes = await response.json();
        list.innerHTML = '';
        notes.forEach(note => {
            const li = document.createElement('li');
            li.textContent = note.content;
            list.appendChild(li);
        });
    };

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const content = input.value.trim();
        if (!content) return;
        await fetch('../api/add_note.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ content })
        });
        input.value = '';
        fetchNotes();
    });

    fetchNotes();
});
