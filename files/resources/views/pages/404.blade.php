<x-layouts.main title="Not found" description="That page does not exist." current="/404">
    <x-sections.page-header
        heading="That page is not here"
        intro="It may have moved, or it may never have existed. Everything I have written is one click away." />
    <x-sections.writing-rows label="Recent writing" :items="$posts" />
    <x-sections.elsewhere :items="$site->social_links" />
</x-layouts.main>
