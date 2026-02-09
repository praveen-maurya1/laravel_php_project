<style>
    .users-table {
        width: 100%;
        border-collapse: collapse;
        background: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 6px;
        overflow: hidden;
    }

    .users-table thead {
        background: #8B0000;
        /* Maroon */
        color: #FFD700;
        /* Yellow */
    }

    .users-table th,
    .users-table td {
        padding: 12px 14px;
        text-align: left;
        font-size: 14px;
        border-bottom: 1px solid #eee;
    }

    .users-table th {
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    .users-table tbody tr:hover {
        background: #fff6d6;
        /* light yellow hover */
    }

    .delete-btn {
        padding: 6px 12px;
        background: #8B0000;
        color: #FFD700;
        border: none;
        border-radius: 4px;
        font-size: 13px;
        cursor: pointer;
        font-weight: bold;
    }

    .delete-btn:hover {
        background: #a50000;
    }
</style>

<table class="users-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->user_name }}</td>
            <td>{{ $user->user_email }}</td>
            <td>{{ $user->user_moblieNumber }}</td>
            <td>
                <form method="POST"
                    action="{{ route('admin.users.destroy', ['id' => $user->user_id]) }}"
                    onsubmit="return confirm('Delete this user?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>