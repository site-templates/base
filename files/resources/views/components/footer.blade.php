@props([
    'links' => [],
    'colophon' => 'Set in Space Grotesk and Inter. No cookies, no trackers, no JavaScript.',
])
{{-- One hairline, one row, and a line of small print. The columns come from
     resources/data/site.json (footer_links). --}}
<footer class="mx-auto w-full max-w-[40rem] px-6">
    <div class="flex flex-col gap-5 border-t border-line py-8 sm:flex-row-reverse sm:items-center sm:justify-between">

        <ul role="list" class="-mx-3 flex flex-wrap items-center gap-x-1 gap-y-0.5">
            @foreach ($links as $link)
            <li class="text-base sm:text-sm">
                <a href="{{ $link->url }}" class="flex rounded-full px-3 py-2 text-muted hover:bg-surface hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:py-1.5">{{ $link->text }}</a>
            </li>
            @endforeach
        </ul>

        <p class="text-base text-muted sm:text-sm">© {{ $site->name }}</p>

    </div>

    <p class="max-w-[54ch] pb-10 text-base text-pretty text-muted sm:pb-12 sm:text-sm">{{ $colophon }}</p>
</footer>
