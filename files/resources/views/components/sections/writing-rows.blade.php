@props([
    'label' => 'Writing',
    'showLabel' => '1',
    'showExcerpt' => '0',
    'showLink' => '1',
    'linkText' => 'All writing',
    'linkHref' => '/writing',
    'excludeSlug' => '',
    'items' => [],
])
{{-- The same row as the projects list, one line shorter: title, filling rule,
     date. Turn on the excerpt and it becomes the archive on /writing. Posts
     come from resources/data/collections/posts.json — add one there and it
     appears here, in the archive, and at its own URL. A post page passes its
     own slug as excludeSlug so the list never offers you the page you are
     already reading. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-16 sm:pt-20">

    @if ($showLabel == '1')
    <h2 class="mb-5 text-base text-muted sm:mb-6 sm:text-sm">{{ $label }}</h2>
    @endif

    <ul role="list" class="flex flex-col">
        @foreach ($items as $item)
        @if ($item->slug != $excludeSlug)
        <li>
            <a href="{{ $item->link }}" class="row-link flex flex-col gap-y-1 py-3">
                <div class="flex items-baseline gap-x-3">
                    <h3 class="display-row font-display font-medium text-ink">{{ $item->title }}</h3>
                    <span class="leader h-px flex-1 max-sm:hidden" aria-hidden="true"></span>
                    <p class="row-meta ml-auto shrink-0 text-base text-muted tabular-nums sm:ml-0 sm:text-sm">{{ $item->dateFormatted }}</p>
                </div>
                @if ($showExcerpt == '1')
                <p class="max-w-[58ch] text-base text-pretty text-muted sm:text-sm">{{ $item->excerpt }}</p>
                @endif
            </a>
        </li>
        @endif
        @endforeach
    </ul>

    @if ($showLink == '1')
    <a href="{{ $linkHref }}" class="row-link mt-3 inline-flex items-center gap-1.5 py-2 text-base font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:text-sm">
        {{ $linkText }}
        <svg viewBox="0 0 16 16" class="link-arrow size-3.5 shrink-0 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
    </a>
    @endif

</section>
