@props([
    'avatar' => '/images/avatar.jpg',
    'avatarAlt' => 'Rowan Ellis',
    'name' => 'Rowan Ellis',
    'bio' => 'Independent developer in Lisbon, building small software products on my own. Writing about craft, shipping, and the parts of the job nobody demos.',
    'showStatus' => '1',
    'status' => 'Taking on one project this autumn',
    'statusHref' => 'mailto:rowan@rowanellis.com',
])
{{-- The first viewport: a face, a name, two lines, and the availability line
     underneath. No headline and no call to action — on a personal site the
     person is the headline. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-2 sm:pt-6">

    <div class="flex items-start gap-5">
        <img src="{{ $avatar }}" alt="{{ $avatarAlt }}" width="72" height="72" class="size-14 shrink-0 rounded-full object-cover sm:size-[4.5rem]">
        <div class="pt-0.5">
            <h1 class="display-name font-display font-semibold text-ink">{{ $name }}</h1>
            <p class="mt-3 max-w-[46ch] text-base text-pretty text-muted sm:mt-2.5">{{ $bio }}</p>
        </div>
    </div>

    @if ($showStatus == '1')
    <a href="{{ $statusHref }}" class="row-link mt-7 inline-flex items-center gap-2.5 py-1.5 text-base text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:mt-8 sm:text-sm">
        <span class="status-dot flex size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
        {{ $status }}
    </a>
    @endif

</section>
