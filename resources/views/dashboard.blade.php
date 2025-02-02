<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nexo') }}
        </h3>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php
                        $members = App\Models\Member::all();
                    @endphp

                    @if (count($members) == 0)
                        <div class="container">
                            <div class="col-md-12">
                                <h1>No hay miembros registrados</h1>
                            </div>
                        </div>
                    @else
                        <div class="container">
                            <div class="col-md-12">
                                <table class="table table-responsive w-full">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="text-align: left">Nombre</th>
                                            <th scope="col" style="text-align: left">Apellido</th>
                                            <th scope="col" style="text-align: left">Correo</th>
                                            <th scope="col" style="text-align: left">Teléfono</th>
                                            <th scope="col" style="text-align: left">Ubicación</th>
                                            <th scope="col" style="text-align: left">Cumpleaños</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($members as $member)
                                            <tr>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->lastname }}</td>
                                                <td>{{ $member->email }}</td>
                                                <td>{{ $member->phone }}</td>
                                                <td>{{ $member->location }}</td>
                                                <td>{{ $member->birthdate }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
