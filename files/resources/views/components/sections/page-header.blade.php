@props([
    'heading' => 'Writing',
    'intro' => '',
    'showIntro' => '1',
])
{{-- The title block at the top of a page that is not the home page. One
     heading, one optional line. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-2 sm:pt-6">
    <h1 class="display-page max-w-[20ch] font-display font-semibold text-balance text-ink">{{ $heading }}</h1>

    @if ($showIntro == '1')
    <p class="mt-4 max-w-[52ch] text-base text-pretty text-muted sm:mt-5">{{ $intro }}</p>
    @endif
</section>
