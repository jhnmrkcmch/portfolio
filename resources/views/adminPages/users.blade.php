@extends('layouts.adminLayout')
    
@section('title', 'Dashboard')

@section('hideMainNavbar', true)
@section('hideFooter', true)

@section('content')


<!-- Table -->
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Accounts</h1>

        <button class="btn btn-primary btn-sm" id="addAccount-btn">
            <i class="bi bi-plus-lg me-1"></i> Add Account
        </button>
    </div>

    <table id="data-table" class="table table-dark table-hover table-bordered">
        <thead></thead>
        <tbody></tbody>
    </table>
</div>


<!-- Add -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="addAccount" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Add Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success alert-dismissible" id="add-success" style="display:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <div class="alert alert-danger alert-dismissible" id="add-error" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                <form id="addForm">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control dashboard-input" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="col-form-label">Age:</label>
                        <input type="number" class="form-control dashboard-input" name="age" id="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control dashboard-input" name="password" id="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="col-form-label">Confirm Password:</label>
                        <input type="password" class="form-control dashboard-input" name="password_confirmation" id="password_confirmation" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancel">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Account</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>


<!-- Edit -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success alert-dismissible" id="edit-success" style="display:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <div class="alert alert-danger alert-dismissible" id="edit-error" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                <form id="editForm">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="accID" class="col-form-label">Account ID:</label>
                        <input type="text" class="form-control dashboard-input" id="accID" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control dashboard-input" id="edit-name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control dashboard-input" id="edit-email">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="col-form-label">Age:</label>
                        <input type="number" class="form-control dashboard-input" id="edit-age">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control dashboard-input" id="edit-password">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="col-form-label">Role:</label>
                        <select class="form-control dashboard-input" id="edit-role">
                            <option value="user">User</option>
                            <option value="editor">Editor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="edit-cancel">Cancel</button>
                <button type="button" class="btn btn-primary" id="update">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success alert-dismissible" id="okay" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                <div class="alert alert-danger alert-dismissible" id="not" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                Are you sure you want to delete this account?
                <form style="display: none;">
                    <input type="text" class="form-control" id="id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="abort">Abort</button>
                <button type="button" class="btn btn-danger" id="delete">Proceed</button>
            </div>
        </div>
    </div>
</div>

<script>
function reload() {
    fetch("{{ route('accounts.data') }}")
        .then(res => res.json())
        .then(data => {
            const table = document.getElementById('data-table');

            table.querySelector('thead').innerHTML = '';
            table.querySelector('tbody').innerHTML = '';

            if (data.length === 0) return;

            // HEADER
            const thead = table.createTHead();
            const headerRow = thead.insertRow();

            for (const key in data[0]) {
                const th = document.createElement('th');
                th.textContent = key;
                headerRow.appendChild(th);
            }

            const actionTh = document.createElement('th');
            actionTh.textContent = 'Actions';
            headerRow.appendChild(actionTh);

            // BODY
            const tbody = table.querySelector('tbody');

            data.forEach(user => {
                const row = tbody.insertRow();
                        
                for (const key in user) {
                    const cell = row.insertCell();
        
                    if (key === 'created_at' || key === 'updated_at') {
                        const date = new Date(user[key]);
                        cell.textContent = date.toISOString().split('T')[0];
                    } else {
                        cell.textContent = user[key];
                    }
                    
                }
            
                const actionCell = row.insertCell();
                actionCell.innerHTML = `
                    <div class="d-flex align-items-center justify-content-center">
                        <button class="btn btn-success btn-sm me-1" onclick='editUser(${JSON.stringify(user)})'>
                            <i class="bi bi-pen"></i>
                        </button>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete(${user.id})">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                `;
            });

        });
}


reload();

// Add
document.getElementById('addAccount-btn').addEventListener('click', () => {
    const modalEl = document.getElementById('addAccount');
    const modal = new bootstrap.Modal(modalEl);
    modal.show();
});
document.getElementById('addForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('/accounts', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById('add-success').innerText = data.message;
        document.getElementById('add-success').style.display = 'block';

        this.reset();
        reload();

        setTimeout(() => {
            bootstrap.Modal.getInstance(
                document.getElementById('addAccount')
            ).hide();

            document.getElementById('add-success').style.display = 'none';
        }, 1000);
    });

});


function editUser(user) {
    document.getElementById('accID').value = user.id;
    document.getElementById('edit-name').value = user.name ?? '';
    document.getElementById('edit-email').value = user.email ?? '';
    document.getElementById('edit-age').value = user.age ?? '';
    document.getElementById('edit-password').value = '';
    document.getElementById('edit-role').value = user.role ?? 'user';

    const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
    modal.show();
}


// Update
document.getElementById('update').addEventListener('click', () => {
    const id = document.getElementById('accID').value;

    const formData = new FormData();
    formData.append('name', document.getElementById('edit-name').value);
    formData.append('email', document.getElementById('edit-email').value);
    formData.append('age', document.getElementById('edit-age').value);
    formData.append('password', document.getElementById('edit-password').value);
    formData.append('role', document.getElementById('edit-role').value);
    formData.append('_method', 'PUT'); // Laravel method spoofing
    

    fetch(`/accounts/${id}`, {
        method: 'POST', // use POST + _method
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
    })
    .then(res => res.json())
    .then(() => {
        bootstrap.Modal.getInstance(
            document.getElementById('exampleModal')
        ).hide();

        reload();
    });
});


// Delete
function confirmDelete(id) {
    document.getElementById('id').value = id;

    const modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    modal.show();
}

document.getElementById('delete').addEventListener('click', () => {
    const id = document.getElementById('id').value;

    fetch(`/accounts/${id}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(() => {
        bootstrap.Modal.getInstance(
            document.getElementById('staticBackdrop')
        ).hide();

        reload();
    });
});



</script>


@endsection