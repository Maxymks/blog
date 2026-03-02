# CSS — Notatki

## Składnia i selektory

```css
selektor {
  właściwość: wartość;
}
```

| Selektor | Przykład | Opis |
|---|---|---|
| Element | `p` | Wszystkie `<p>` |
| Klasa | `.box` | Elementy z klasą |
| ID | `#header` | Element z ID |
| Atrybut | `[type="text"]` | Po atrybucie |
| Potomny | `div p` | `<p>` wewnątrz `<div>` |
| Bezpośredni | `div > p` | Bezpośrednie dziecko |
| Sąsiadujący | `h1 + p` | Pierwszy `<p>` po `<h1>` |
| Rodzeństwo | `h1 ~ p` | Wszystkie `<p>` po `<h1>` |

## Pseudoklasy i pseudoelementy

```css
a:hover, a:focus, a:active, a:visited
input:disabled, input:checked, input:required
li:first-child, li:last-child, li:nth-child(2n)
p:not(.special)

p::before { content: "→ "; }
p::after  { content: " ←"; }
::placeholder { color: gray; }
::selection   { background: yellow; }
```

## Box Model

```
margin → border → padding → content
```

```css
box-sizing: border-box; /* padding i border wliczone w width */
width: 300px;
padding: 10px 20px;     /* góra/dół  lewo/prawo */
margin: 0 auto;         /* wyśrodkowanie */
border: 2px solid #333;
border-radius: 8px;
outline: none;
```

## Kolory i tło

```css
color: #ff0000;
color: rgb(255, 0, 0);
color: hsl(0, 100%, 50%);
color: rgba(255, 0, 0, 0.5);

background-color: #fff;
background-image: url('img.jpg');
background-size: cover | contain | 100%;
background-position: center;
background-repeat: no-repeat;
background: linear-gradient(135deg, #f06 0%, #09f 100%);
```

## Typografia

```css
font-family: 'Roboto', sans-serif;
font-size: 1rem;        /* 1rem = 16px domyślnie */
font-weight: 400 | 700 | bold;
font-style: italic;
line-height: 1.5;
letter-spacing: 0.05em;
text-align: left | center | right | justify;
text-transform: uppercase | capitalize;
text-decoration: underline | none;
text-overflow: ellipsis;
white-space: nowrap;
overflow: hidden;
```

## Flexbox

```css
.container {
  display: flex;
  flex-direction: row | column;
  justify-content: flex-start | center | flex-end | space-between | space-around;
  align-items: stretch | center | flex-start | flex-end | baseline;
  flex-wrap: wrap | nowrap;
  gap: 16px;
}

.item {
  flex: 1;              /* skrót: flex-grow flex-shrink flex-basis */
  align-self: center;
  order: 2;
}
```

## CSS Grid

```css
.container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: auto;
  gap: 16px 24px;       /* row-gap column-gap */
}

.item {
  grid-column: 1 / 3;   /* od linii 1 do 3 */
  grid-row: 1 / 2;
  grid-area: header;
}

/* Obszary */
grid-template-areas:
  "header header"
  "sidebar main"
  "footer footer";
```

## Pozycjonowanie

```css
position: static;    /* domyślne */
position: relative;  /* względem siebie */
position: absolute;  /* względem rodzica z position ≠ static */
position: fixed;     /* względem okna przeglądarki */
position: sticky;    /* relative + fixed po przekroczeniu progu */

top: 0; right: 0; bottom: 0; left: 0;
z-index: 10;
```

## Zmienne CSS (Custom Properties)

```css
:root {
  --color-primary: #3b82f6;
  --spacing-md: 16px;
  --font-body: 'Inter', sans-serif;
}

.button {
  background: var(--color-primary);
  padding: var(--spacing-md);
}
```

## Animacje i przejścia

```css
/* Transition */
.btn {
  transition: background 0.3s ease, transform 0.2s;
}
.btn:hover {
  background: darkblue;
  transform: scale(1.05);
}

/* Keyframes */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

.element {
  animation: fadeIn 0.5s ease forwards;
  animation-delay: 0.2s;
}
```

## Media Queries (RWD)

```css
/* Mobile first */
.container { width: 100%; }

@media (min-width: 768px) {
  .container { width: 720px; }
}

@media (min-width: 1024px) {
  .container { width: 960px; }
}

/* Inne */
@media (prefers-color-scheme: dark) { ... }
@media (prefers-reduced-motion: reduce) { ... }
@media print { ... }
```

## Przydatne właściwości

```css
/* Wyśrodkowanie */
display: grid; place-items: center;

/* Przycinanie tekstu do N linii */
display: -webkit-box;
-webkit-line-clamp: 3;
-webkit-box-orient: vertical;
overflow: hidden;

/* Efekty */
opacity: 0.5;
filter: blur(4px) brightness(0.8);
backdrop-filter: blur(10px);
mix-blend-mode: multiply;
box-shadow: 0 4px 24px rgba(0,0,0,0.1);
clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);

/* Kursor */
cursor: pointer | not-allowed | grab;

/* Scroll */
scroll-behavior: smooth;
overflow-x: hidden;
```

## Jednostki

| Jednostka | Opis |
|---|---|
| `px` | Piksele bezwzględne |
| `rem` | Względem root font-size (16px) |
| `em` | Względem parent font-size |
| `%` | Względem rodzica |
| `vw` / `vh` | % szerokości / wysokości okna |
| `vmin` / `vmax` | Mniejszy / większy z vw i vh |
| `fr` | Frakcja w Grid |
| `ch` | Szerokość znaku "0" |