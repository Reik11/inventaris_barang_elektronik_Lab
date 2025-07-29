<button {{ $attributes->merge(['class' => 'px-4 py-2 bg-indigo-500 hover:bg-fuchsia-500 text-white rounded hover:bg-purple-700 transition']) }}>
    {{ $slot }}
</button>
