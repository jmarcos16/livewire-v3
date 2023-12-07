@props(['head', 'body'])
<div {{ $attributes->merge(['class' => 'mx-auto max-w-7xl']) }}>
    <div class="inline-block min-w-full py-2 align-middle">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        {{ $head }}
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    {{ $body }}
                </tbody>
            </table>
        </div>
    </div>
</div>
