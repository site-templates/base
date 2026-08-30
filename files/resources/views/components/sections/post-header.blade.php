@props([
    'title' => 'A post',
    'dateFormatted' => '',
    'readTime' => '',
    'excerpt' => '',
    'backText' => 'Writing',
    'backHref' => '/writing',
])
{{-- The top of a post: the way back, the date and length, the title, and the
     standfirst. Everything except the back link comes from the post's own row
     in resources/data/collections/posts.json. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-2 sm:pt-6">

    <a href="{{ $backHref }}" class="row-link -mt-2 inline-flex items-center gap-1.5 py-2 text-base text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:text-sm">
        <svg viewBox="0 0 16 16" class="link-arrow-back size-3.5 shrink-0 rotate-180 fill-current" aria-hidden="true"><path d="M8.5 3.3 13.2 8l-4.7 4.7-1.06-1.06 2.89-2.89H2.8V7.25h7.53L7.44 4.36z"/></svg>
        {{ $backText }}
    </a>

    <h1 class="display-page mt-6 max-w-[22ch] font-display font-semibold text-balance text-ink sm:mt-8">{{ $title }}</h1>

    <p class="mt-5 max-w-[54ch] text-base text-pretty text-muted">{{ $excerpt }}</p>

    <p class="mt-6 flex items-center gap-2 border-t border-line pt-5 text-base text-muted tabular-nums sm:text-sm">
        {{ $dateFormatted }}
        <span class="flex size-0.5 shrink-0 rounded-full bg-muted" aria-hidden="true"></span>
        {{ $readTime }}
    </p>

</section>
