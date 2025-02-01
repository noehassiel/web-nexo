<div class="form">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="d-flex justify-content-between align-items-center">
        <h3>Registro</h3>

        <div class="closeForm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x"
                viewBox="0 0 16 16">
                <path
                    d="M8 6.586l4.95-4.95a.75.75 0 0 1 1.061 1.061L9.06 7.647l4.95 4.95a.75.75 0 0 1-1.061 1.061l-4.95-4.95-4.95 4.95a.75.75 0 0 1-1.061-1.061l4.95-4.95-4.95-4.95a.75.75 0 0 1 1.061-1.061L8 6.586z" />
            </svg>

        </div>
    </div>

    <form wire:submit="save">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" wire:model="name" id="name" placeholder="Nombre">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" wire:model="email" id="email" placeholder="nombre@email.com">
        </div>

        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="phone" class="form-control" wire:model="phone" id="phone" placeholder="+52 222 222 2222">
        </div>

        <div class="form-group">
            <label for="birthday">Fecha de nacimiento</label>
            <input type="date" class="form-control" wire:model="birthday" id="birthday"
                placeholder="Fecha de nacimiento">
        </div>

        <div class="form-group">
            <label for="password">Ubicación</label>
            <select name="location" id="location" class="form-control" wire:model="location">
                <option value="1">La Paz</option>
                <option value="2">Norte</option>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
