<x-filament::page>
    <form wire:submit="save">
        {{ $this->form }}

        <x-filament::button
            type="submit"
            class="mt-6"
        >
            Save changes
        </x-filament::button>
    </form>
</x-filament::page>
