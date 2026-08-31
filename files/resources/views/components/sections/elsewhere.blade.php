@props([
    'label' => 'Elsewhere',
    'items' => [],
])
{{-- Two columns of places to find me. The same plate-on-hover as everything
     else, but no filling rule: these are addresses, not entries in a list.
     Rows come from resources/data/site.json (social_links); the `platform` key
     picks the icon — email, x, github or bluesky. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-16 sm:pt-20">

    <h2 class="text-base text-muted sm:text-sm">{{ $label }}</h2>

    <ul role="list" class="mt-5 grid gap-x-10 sm:mt-6 sm:grid-cols-2">
        @foreach ($items as $item)
        <li>
            <a href="{{ $item->url }}" target="_blank" rel="noopener" class="row-link flex items-center gap-3 py-3">
                <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current text-muted" aria-hidden="true">
                    @if ($item->platform == 'email')
                    <path d="M1.5 3.75c0-.69.56-1.25 1.25-1.25h10.5c.69 0 1.25.56 1.25 1.25v8.5c0 .69-.56 1.25-1.25 1.25H2.75c-.69 0-1.25-.56-1.25-1.25Zm1.5.42v.34l5 3.13 5-3.13v-.34ZM13 5.92l-4.6 2.88a.75.75 0 0 1-.8 0L3 5.92v5.83h10Z"/>
                    @endif
                    @if ($item->platform == 'x')
                    <path d="M12.36 1.5h2.3l-5.02 5.74L15.5 14.5h-4.6l-3.6-4.71-4.13 4.71H.86l5.37-6.14L.66 1.5h4.72l3.26 4.3ZM11.55 13.13h1.27L4.7 2.8H3.34Z"/>
                    @endif
                    @if ($item->platform == 'github')
                    <path d="M8 .8a7.2 7.2 0 0 0-2.28 14.03c.36.07.49-.16.49-.35v-1.23c-2 .44-2.43-.96-2.43-.96-.33-.83-.8-1.06-.8-1.06-.65-.45.05-.44.05-.44.72.05 1.1.74 1.1.74.64 1.1 1.69.78 2.1.6.06-.47.25-.79.45-.97-1.6-.18-3.28-.8-3.28-3.56 0-.79.28-1.43.74-1.93-.07-.19-.32-.92.07-1.91 0 0 .61-.2 2 .74a6.9 6.9 0 0 1 3.64 0c1.39-.94 2-.74 2-.74.39.99.14 1.72.07 1.91.46.5.74 1.14.74 1.93 0 2.77-1.69 3.38-3.29 3.55.26.22.49.67.49 1.35v2c0 .2.13.43.49.36A7.2 7.2 0 0 0 8 .8Z"/>
                    @endif
                    @if ($item->platform == 'bluesky')
                    <path d="M4.4 2.6C6 3.8 7.7 6.3 8.3 7.6c.6-1.3 2.3-3.8 3.9-5 1.2-.9 3-1.5 3 .7 0 .4-.2 3.6-.4 4.1-.5 1.8-2.3 2.3-3.9 2 2.8.5 3.5 2.1 2 3.7-2.9 3-4.2-.8-4.5-1.7-.1-.2-.1-.3-.1-.2s0-.1-.1.2c-.3.9-1.6 4.7-4.5 1.7-1.5-1.6-.8-3.2 2-3.7-1.6.3-3.4-.2-3.9-2-.2-.5-.4-3.7-.4-4.1 0-2.2 1.8-1.6 3-.7Z"/>
                    @endif
                </svg>
                <span class="text-base font-medium text-ink sm:text-sm">{{ $item->label }}</span>
                <span class="row-meta ml-auto min-w-0 truncate text-base text-muted sm:text-sm">{{ $item->handle }}</span>
            </a>
        </li>
        @endforeach
    </ul>

</section>
