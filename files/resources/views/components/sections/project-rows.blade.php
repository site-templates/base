@props([
    'label' => 'Projects',
    'items' => [],
])
{{-- The list of things I made. Two lines each: the name and the date joined by
     a rule that fills green as you point at it, and the description
     underneath. These leave the site, so they carry an arrow the writing rows
     do not. Rows come from resources/data/collections/projects.json. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-16 sm:pt-20">

    <h2 class="text-base text-muted sm:text-sm">{{ $label }}</h2>

    <ul role="list" class="mt-5 flex flex-col sm:mt-6">
        @foreach ($items as $item)
        <li>
            <a href="{{ $item->url }}" class="row-link flex flex-col gap-y-1 py-3">
                <div class="flex items-baseline gap-x-3">
                    <h3 class="display-row flex items-center gap-1.5 font-display font-medium text-ink">
                        {{ $item->name }}
                        <svg viewBox="0 0 12 12" class="row-arrow size-3 shrink-0 fill-current text-muted" aria-hidden="true"><path d="M3.4 2.5h6.1v6.1H8.2V4.66L3.06 9.79l-.85-.85 5.13-5.13H3.4z"/></svg>
                    </h3>
                    <span class="leader h-px flex-1 max-sm:hidden" aria-hidden="true"></span>
                    <p class="row-meta ml-auto shrink-0 text-base text-muted tabular-nums sm:ml-0 sm:text-sm">{{ $item->date }}</p>
                </div>
                <p class="max-w-[58ch] text-base text-pretty text-muted sm:text-sm">{{ $item->description }}</p>
            </a>
        </li>
        @endforeach
    </ul>

</section>
