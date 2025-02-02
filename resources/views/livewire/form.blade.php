<div class="form">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="d-flex justify-content-between align-items-center">
        <h3>Registro</h3>

        <div class="closeForm" style="cursor: pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x"
                viewBox="0 0 16 16">
                <path
                    d="M8 6.586l4.95-4.95a.75.75 0 0 1 1.061 1.061L9.06 7.647l4.95 4.95a.75.75 0 0 1-1.061 1.061l-4.95-4.95-4.95 4.95a.75.75 0 0 1-1.061-1.061l4.95-4.95-4.95-4.95a.75.75 0 0 1 1.061-1.061L8 6.586z" />
            </svg>

        </div>
    </div>

    <div class="form-content">
        <form wire:submit="save">
            <div class="form-group mb-2">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" wire:model="name" id="name" placeholder="Nombre">
            </div>

            <div class="form-group mb-2">
                <label for="lastname">Apellido</label>
                <input type="text" class="form-control" wire:model="lastname" id="lastname" placeholder="Apellido">
            </div>

            <div class="form-group mb-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" wire:model="email" id="email"
                    placeholder="nombre@email.com">
            </div>

            <div class="form-group mb-2">
                <label for="phone">Teléfono</label>
                <input type="phone" class="form-control" wire:model="phone" id="phone"
                    placeholder="+52 222 222 2222">
            </div>

            <div class="form-group mb-2">
                <label for="birthdate">Fecha de nacimiento</label>
                <input type="date" class="form-control" wire:model="birthdate" id="birthdate"
                    placeholder="Fecha de nacimiento">
            </div>

            <div class="form-group mb-2">
                <label for="location">Ubicación</label>

                <select wire:model="location" class="form-control">
                    <option selected value="">Seleccionar ubicación</option>
                    <option value="La Paz" selected>La paz</option>
                    <option value="Norte">Norte</option>
                </select>
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-dark">Registrar</button>
            </div>

        </form>
    </div>
</div>
