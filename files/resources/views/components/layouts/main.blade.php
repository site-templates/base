@props(['title' => 'Home', 'description' => '', 'current' => '/'])
<!doctype html>
<html lang="en" class="scroll-smooth motion-reduce:scroll-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <meta property="og:title" content="{{ $title }} · {{ $site->name }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="website">

    <!-- The avatar is the mark: same face in the tab, the header and the hero. -->
    <link rel="icon" href="/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="/favicon.png">

    <!-- Space Grotesk sets the name, the page titles and every row title.
         Inter carries the paragraphs and the small print. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600&display=swap" rel="stylesheet">

    <!-- Tailwind, then the tokens, the display scale, the row interaction and
         the prose rules. There is no second stylesheet and no script. -->
    @vite(['resources/css/site.css'])
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased" data-instant-navigation>
<!--
    THESIS: a personal site is a reading surface with a short list of proof
    attached. It should open instantly, say who you are in one screen, and
    then get out of the way of the writing.
    OWN-WORLD: white paper, one 40rem column, hairlines instead of boxes, and
    a single deep green that only ever marks the thing under your cursor.
    STORY: who I am, what I have made, what I have written, where to find me.
    FIRST VIEWPORT: the avatar, the name, two lines of bio, and the beginning
    of the About paragraph — no headline, no pitch, no call to action.
    FORM: one column, left aligned, no JavaScript at all.
-->

    <x-nav :links="$site->nav_links" :current="$current" />

    <main class="isolate pb-20 sm:pb-28">
        {{ $slot }}
    </main>

    <x-footer :links="$site->footer_links" />

</body>
</html>
