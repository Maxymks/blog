# HTML — Notatki

## Struktura dokumentu

```html
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tytuł strony</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- treść -->
  <script src="script.js"></script>
</body>
</html>
```

## Semantyczne znaczniki

| Tag | Zastosowanie |
|---|---|
| `<header>` | Nagłówek strony / sekcji |
| `<nav>` | Nawigacja |
| `<main>` | Główna treść (jeden na stronę) |
| `<article>` | Niezależna treść (post, artykuł) |
| `<section>` | Tematyczna sekcja |
| `<aside>` | Treść poboczna (sidebar) |
| `<footer>` | Stopka |
| `<figure>` + `<figcaption>` | Ilustracja z podpisem |
| `<time datetime="...">` | Data/czas |

## Nagłówki i tekst

```html
<h1> do <h6>  <!-- hierarchia, tylko jeden h1 na stronę -->
<p>            <!-- akapit -->
<strong>       <!-- ważne (bold) -->
<em>           <!-- wyróżnienie (italic) -->
<mark>         <!-- podświetlenie -->
<abbr title="HyperText Markup Language">HTML</abbr>
<blockquote cite="url">cytat</blockquote>
<code>inline kod</code>
<pre><code>blok kodu</code></pre>
```

## Linki i media

```html
<!-- Link -->
<a href="https://example.com" target="_blank" rel="noopener noreferrer">Tekst</a>

<!-- Obrazek -->
<img src="foto.jpg" alt="Opis zdjęcia" width="800" height="600" loading="lazy">

<!-- Wideo -->
<video src="film.mp4" controls autoplay muted loop></video>

<!-- Audio -->
<audio src="dzwiek.mp3" controls></audio>
```

## Listy

```html
<!-- Nieuporządkowana -->
<ul>
  <li>Element</li>
</ul>

<!-- Uporządkowana -->
<ol type="1" start="1">
  <li>Pierwszy</li>
</ol>

<!-- Definicji -->
<dl>
  <dt>Termin</dt>
  <dd>Definicja</dd>
</dl>
```

## Formularze

```html
<form action="/wyslij" method="POST">
  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email" required placeholder="adres@email.pl">

  <input type="text" minlength="3" maxlength="50">
  <input type="number" min="0" max="100" step="1">
  <input type="checkbox" id="agree" name="agree">
  <input type="radio" name="group" value="opcja1">

  <select name="kraj">
    <option value="">-- wybierz --</option>
    <option value="pl">Polska</option>
  </select>

  <textarea name="wiadomosc" rows="5" cols="40"></textarea>

  <button type="submit">Wyślij</button>
  <button type="reset">Resetuj</button>
</form>
```

### Typy input

`text` `email` `password` `number` `tel` `url` `date` `time` `datetime-local` `color` `range` `file` `hidden` `search`

## Tabele

```html
<table>
  <caption>Opis tabeli</caption>
  <thead>
    <tr><th scope="col">Kolumna 1</th><th>Kolumna 2</th></tr>
  </thead>
  <tbody>
    <tr><td>Dane</td><td>Dane</td></tr>
  </tbody>
  <tfoot>
    <tr><td colspan="2">Podsumowanie</td></tr>
  </tfoot>
</table>
```

## Meta tagi SEO

```html
<meta name="description" content="Opis strony (160 znaków)">
<meta name="keywords" content="słowa, kluczowe">
<meta name="robots" content="index, follow">

<!-- Open Graph (social media) -->
<meta property="og:title" content="Tytuł">
<meta property="og:description" content="Opis">
<meta property="og:image" content="obraz.jpg">
<meta property="og:url" content="https://example.com">
```

## Dostępność (Accessibility / a11y)

- Zawsze dodawaj `alt` do obrazków
- Używaj semantycznych tagów zamiast `<div>` / `<span>`
- Używaj `<label>` dla każdego pola formularza
- Atrybuty ARIA: `role`, `aria-label`, `aria-hidden`, `aria-expanded`
- Zapewnij kontrast kolorów (min. 4.5:1 dla tekstu)
- Nawigacja klawiaturą — elementy interaktywne muszą być focusable

## Przydatne atrybuty

```html
data-*         <!-- własne dane: data-id="123" -->
tabindex="0"   <!-- dodaje do kolejności Tab -->
hidden         <!-- ukrywa element -->
contenteditable="true"  <!-- edytowalny tekst -->
draggable="true"
spellcheck="true"
```