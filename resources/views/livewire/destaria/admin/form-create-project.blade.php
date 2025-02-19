<div>
    <div x-data="{ expanded: false }">
        <button type="button" x-on:click="expanded = ! expanded">
            <span x-show="! expanded">Show post content...</span>
            <span x-show="expanded">Hide post content...</span>
        </button>

        <div x-show="expanded">
            <form wire:submit="save">
                <!-- ... -->

                <input wire:model="content" type="text" class="bg-gray-500">

               {{--  <small>
                    Character count: <span x-text="$wire.content.length"></span>
                </small> --}}

                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
