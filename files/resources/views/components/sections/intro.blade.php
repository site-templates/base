@props([
    'name' => 'Rowan Emerson',
    'bio' => 'Independent developer in Lisbon, building small software products on my own. Writing about craft, shipping, and the parts of the job nobody demos.',
    'showStatus' => '1',
    'status' => 'Taking on one project this autumn',
    'statusHref' => 'mailto:rowan@rowanemerson.com',
])
{{-- The first viewport: a name, two lines, and the availability line
     underneath. No headline and no call to action — on a personal site the
     person is the headline. The portrait lives in the header and nowhere
     else: one face on the page reads as an identity, two reads as a mistake. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-4 sm:pt-8">

    <h1 class="display-page max-w-[16ch] font-display font-semibold text-balance text-ink">{{ $name }}</h1>
    <p class="mt-4 max-w-[46ch] text-base text-pretty text-muted">{{ $bio }}</p>

    @if ($showStatus == '1')
    <a href="{{ $statusHref }}" class="row-link mt-7 inline-flex items-center gap-2.5 py-1.5 text-base text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:mt-8 sm:text-sm">
        <span class="status-dot flex size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
        {{ $status }}
    </a>
    @endif

</section>
