<x-layouts.main title="Home" description="Rowan Ellis is an independent developer in Lisbon building small software products, and writing about craft, shipping and working alone." current="/">
    <x-sections.intro />
    <x-sections.prose label="About" body="<p>I have been writing software for fourteen years — eight of them inside other people’s companies, six of them on my own. These days I build small products end to end: the idea, the code, the pricing email, the support replies at nine on a Sunday.</p><p>Most of what I make is deliberately small. <strong>Cutlass</strong> deploys a folder. <strong>Halfmoon</strong> sends one alert. <strong>Ledgerline</strong> does bookkeeping for a company of one, because that is the company I have. None of them have a roadmap.</p><p>I write here about the parts of the job nobody demos: cutting a feature you were proud of, pricing something with one customer, and the long unglamorous stretch between working and finished.</p>" />
    <x-sections.project-rows :items="$projects" />
    <x-sections.writing-rows :items="$posts" />
    <x-sections.elsewhere :items="$site->social_links" />
    <x-sections.newsletter />
</x-layouts.main>
