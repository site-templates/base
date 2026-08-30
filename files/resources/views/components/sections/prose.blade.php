@props([
    'label' => 'About',
    'showLabel' => '1',
    'body' => '<p>Write here.</p>',
])
{{-- One rich text block with an optional label above it: the about paragraphs
     on the home page, and the longer version on /about. Post bodies use
     sections/post-body, which sits tighter under its own title. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-16 sm:pt-20">

    @if ($showLabel == '1')
    <h2 class="mb-5 text-base text-muted sm:mb-6 sm:text-sm">{{ $label }}</h2>
    @endif

    <div class="prose">{!! $body !!}</div>

</section>
