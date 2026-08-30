@props([
    'label' => 'Right now',
    'items' => [],
])
{{-- A short, dated snapshot: four lines about what is currently happening.
     Rows come from resources/data/collections/now.json. Nothing here is
     interactive, so nothing here has a hover state. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-16 sm:pt-20">

    <h2 class="text-base text-muted sm:text-sm">{{ $label }}</h2>

    <dl class="mt-5 flex flex-col divide-y divide-line border-y border-line sm:mt-6">
        @foreach ($items as $item)
        <div class="grid gap-x-6 gap-y-1 py-4 sm:grid-cols-[9rem_1fr]">
            <dt class="text-base font-medium text-ink sm:text-sm">{{ $item->label }}</dt>
            <dd class="max-w-[52ch] text-base text-pretty text-muted sm:text-sm">{{ $item->value }}</dd>
        </div>
        @endforeach
    </dl>

</section>
