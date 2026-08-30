# Base — design system

The design brief for this site. The AI reads this before editing anything, so
a change made here changes how everything after it gets designed.

## Atmosphere

A personal site, which means a reading surface with a short list of proof
attached. One column, one column width, left aligned, all the way down. It
should open instantly, say who you are inside the first screen, and then get
out of the way of the writing.

The register is quiet and exact — closer to a well-set page than to a
marketing site. Nothing here is trying to convert anybody. If a decision has
to choose between interesting and calm, it chooses calm.

**There is no JavaScript on this site, and there should not be.** Every
interaction is CSS. Adding a script is a real change to what this template is,
not a small addition.

## Colours

Every value lives once, in the `@theme` block in `resources/css/site.css`.
Markup uses the token utilities — `bg-canvas`, `text-ink`, `border-line` —
and never writes a hex.

| Token | Hex | Role |
|---|---|---|
| `canvas` | `#ffffff` | The paper. The ground on every page. |
| `surface` | `#f4f5f6` | The hover plate, and the one panel at the foot of the page. |
| `ink` | `#15171c` | Names, titles, and anything you are meant to read first. |
| `muted` | `#61656e` | Body copy, dates, descriptions, labels. Clears AA on both neutrals. |
| `line` | `#e5e7ea` | The single hairline weight in the design. |
| `accent` | `#0f7a5a` | The green. |
| `accent-deep` | `#0b6248` | The green's hover state. |
| `accent-ink` | `#ffffff` | The only type allowed to sit on the green. |

**The green appears in exactly four places:** the availability dot, the rule
that fills across a row on hover, the underline beneath a link in prose, and
the subscribe button. It is not a brand colour to be sprinkled — a second
green thing on a screen makes both of them mean less. It is deep rather than
bright specifically so it can carry small text and be its own underline.

## Typography

- **Display** — Space Grotesk 500/600, for the name, page titles and every
  row title. Nothing else.
- **Body** — Inter 400/500, with `cv02 cv03 cv04 cv11 ss01` on.
- Two display steps and a row size, defined once in `site.css`:
  `.display-page` (2→2.75rem) and `.display-row` (1.0625rem). Use the class,
  not a stack of `text-*` breakpoints. `.display-page` is the biggest thing
  on a page — the name on the home page, the title everywhere else — and
  there is only ever one of it per page.
- **The headings are deliberately not large.** The column is 40rem wide; a
  4rem headline inside it reads as a mistake rather than as confidence.
- Section labels are small, muted, sentence case, and they *are* the heading —
  there is never a bigger heading underneath one.
- Body is `text-base` on mobile and `text-sm` from `sm:` up, never smaller.
- Measures are capped per element with `max-w-[*ch]` — never on a wrapper.
- `text-balance` on headings, `text-pretty` on paragraphs, `tabular-nums` on
  every date.

## Spacing and radius

- Container: `max-w-[40rem]` with `px-6`, on every section without exception.
  The single column edge is the strongest thing holding this design together.
- Section rhythm: `pt-16 sm:pt-20`. Sections carry top padding only, so
  stacking them in any order always produces the same gap.
- Radii: `rounded-xl` on the hover plate, `rounded-2xl` on the newsletter
  panel, `rounded-full` on avatars, pills and form controls. Nothing else is
  rounded, because nothing else is a shape.

## Components

**The row is the whole design.** Projects, posts and the archive are all the
same object: a title on the left, a date on the right, and a hairline running
between them. Hover fills that hairline with green from the left, lifts the
date to full ink, and slides a soft plate out three units past both edges of
the column. Every `:hover` rule has a matching `:focus-within` rule — the row
must feel identical when you arrive at it with the keyboard.

**One hover idiom.** The plate is used for every interactive thing on the
site: the wordmark, the header links, the rows, the addresses, the text links.
Do not invent a second hover behaviour.

**Hover rules in `site.css` are hand-wrapped in `@media (hover: hover)`.** Do
not reach for Tailwind's `@variant hover` at the top level of the stylesheet:
it compiles to `:scope:hover .selector:hover`, which matches nothing. The rule
survives the build and the interaction quietly does not.

**No cards.** Content sits on the paper, separated by air. The newsletter
panel is the only filled box on the site, and it earns it by being the only
thing you can type into.

## Voice

First person, plain, and specific. Short declarative sentences. Concrete
numbers instead of adjectives — "eleven days", not "very quickly".

No marketing verbs, no exclamation marks, no "excited to share". The copy
should read as though it was written after the work, not before it.

## Anti-patterns

- A hero headline. The person is the headline; the name does that job.
- A second portrait. The header carries the only one on the site — a face in
  the header and a face in the hero reads as a mistake, not as identity.
- A second accent colour, or the green used decoratively.
- Cards, shadows, or gradients. There are none, anywhere.
- Centre alignment. Everything on this site is left aligned.
- Scroll-triggered reveals. The page is complete the moment it paints.
- A wider column for "impact". The measure is the design.

## Tokens

```css
@theme {
    --color-canvas: #ffffff;
    --color-surface: #f4f5f6;
    --color-ink: #15171c;
    --color-muted: #61656e;
    --color-line: #e5e7ea;
    --color-accent: #0f7a5a;
    --color-accent-deep: #0b6248;
    --color-accent-ink: #ffffff;

    --font-display: "Space Grotesk", "Helvetica Neue", sans-serif;
    --font-sans: "Inter", ui-sans-serif, system-ui, -apple-system, sans-serif;
    --font-sans--font-feature-settings: "cv02", "cv03", "cv04", "cv11", "ss01";

    --ease-out-soft: cubic-bezier(0.2, 0.8, 0.2, 1);
}
```
