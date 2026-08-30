@props([
    'links' => [],
    'current' => '/',
    'avatar' => '/images/avatar.jpg',
    'avatarAlt' => 'Rowan Ellis',
])
{{-- The header is the wordmark and three links, and it scrolls away with the
     page — nothing here is sticky, and nothing here needs JavaScript. Links
     live in resources/data/site.json (nav_links), so editing them changes
     every page at once. Hover is one idiom across the whole site: a soft
     plate slides in behind whatever you are pointing at. --}}
<header class="mx-auto flex w-full max-w-[40rem] items-center justify-between gap-4 px-6 py-6 sm:py-8">

    <a href="/" aria-label="Homepage" class="row-link -my-1.5 flex items-center gap-2.5 py-1.5 text-base focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:text-[0.9375rem]">
        <img src="{{ $avatar }}" alt="{{ $avatarAlt }}" width="28" height="28" class="size-7 shrink-0 rounded-full object-cover">
        <span class="font-display font-medium tracking-tight text-ink">{{ $site->name }}</span>
    </a>

    <nav aria-label="Main">
        <ul role="list" class="-mr-3 flex items-center gap-0.5">
            @foreach ($links as $link)
            <li class="text-base sm:text-sm">
                @if ($link->url == $current)
                <a href="{{ $link->url }}" aria-current="page" class="flex rounded-full bg-surface px-3 py-2.5 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:py-1.5">{{ $link->text }}</a>
                @endif
                @if ($link->url != $current)
                <a href="{{ $link->url }}" class="flex rounded-full px-3 py-2.5 text-muted hover:bg-surface hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:py-1.5">{{ $link->text }}</a>
                @endif
            </li>
            @endforeach
        </ul>
    </nav>

</header>
