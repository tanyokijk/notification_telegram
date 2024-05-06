<section>
    <header>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Add a new post.") }}
        </p>
    </header>

    <form method="post" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"  required autofocus autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <div>
            <x-input-label for="text" :value="__('Text')" />
            <x-text-input id="Text" name="Text" type="Text" class="mt-1 block w-full"  required autocomplete="Text" />
            <x-input-error class="mt-2" :messages="$errors->get('Text')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Add') }}</x-primary-button>

        </div>
    </form>
</section>
