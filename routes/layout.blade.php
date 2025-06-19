<!-- Tambahan di header/navbar -->
<div style="position: absolute; top: 20px; right: 20px;">
    <div style="position: relative;">
        <button onclick="toggleDropdown()" style="padding: 8px 12px; background-color: #eee; border: none; border-radius: 5px;">
            {{ session('nama') ?? 'Guest' }} ▼
        </button>
        <div id="dropdown" style="display: none; position: absolute; right: 0; background: white; border: 1px solid #ccc; padding: 10px; width: 150px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <a href="/profile" style="display: block; padding: 5px 0;">Profile</a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" style="background: none; border: none; padding: 5px 0; text-align: left; width: 100%;">Log Out</button>
            </form>
        </div>
    </div>
</div>

<script>
    function toggleDropdown() {
        var dropdown = document.getElementById('dropdown');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }
</script>
