# JavaScript — Notatki

## Podstawy

- **Typy danych**: `string`, `number`, `boolean`, `null`, `undefined`, `object`, `symbol`, `bigint`
- **Deklaracje zmiennych**: `var` (funkcyjny, hoisting), `let` (blokowy), `const` (blokowy, niezmienialny)
- **Typeof**: `typeof null === 'object'` ← znany bug JS

## Funkcje

```js
// Deklaracja
function sum(a, b) { return a + b; }

// Wyrażenie
const sum = function(a, b) { return a + b; };

// Arrow function
const sum = (a, b) => a + b;
```

- Arrow functions **nie mają własnego `this`**
- `arguments` dostępne tylko w zwykłych funkcjach

## Zakresy i domknięcia (Closures)

```js
function counter() {
  let count = 0;
  return () => ++count;
}
const next = counter();
next(); // 1, 2, 3...
```

## Hoisting

- Deklaracje funkcji i `var` są "podnoszone" na górę zakresu
- `let` i `const` też są podnoszone, ale wpadają w **Temporal Dead Zone**

## Asynchroniczność

```js
// Callback
fetch(url, (err, data) => { ... });

// Promise
fetch(url).then(res => res.json()).catch(err => console.error(err));

// Async/Await
async function load() {
  try {
    const res = await fetch(url);
    const data = await res.json();
  } catch (err) {
    console.error(err);
  }
}
```

## Tablice — przydatne metody

| Metoda | Opis |
|---|---|
| `map(fn)` | Tworzy nową tablicę po transformacji |
| `filter(fn)` | Filtruje elementy |
| `reduce(fn, init)` | Redukuje do jednej wartości |
| `find(fn)` | Zwraca pierwszy pasujący element |
| `some(fn)` / `every(fn)` | Przynajmniej jeden / wszystkie |
| `flat(depth)` | Spłaszcza tablicę |
| `spread [...]` | Kopiuje / łączy tablice |

## Obiekty

```js
const obj = { a: 1, b: 2 };

// Destrukturyzacja
const { a, b } = obj;

// Spread
const copy = { ...obj, c: 3 };

// Optional chaining
obj?.nested?.value;

// Nullish coalescing
const val = obj.x ?? 'domyślna';
```

## Klasy

```js
class Animal {
  constructor(name) { this.name = name; }
  speak() { return `${this.name} wydaje dźwięk`; }
}

class Dog extends Animal {
  speak() { return `${this.name} szczeka`; }
}
```

## Moduły (ES6)

```js
// Eksport
export const pi = 3.14;
export default function main() { ... }

// Import
import main, { pi } from './module.js';
```

## Przydatne skróty

```js
// Skrót właściwości obiektu
const x = 1; const obj = { x }; // { x: 1 }

// Template literals
`Cześć, ${name}!`

// Domyślne parametry
function greet(name = 'Świat') { ... }

// Reszta parametrów
function sum(...nums) { return nums.reduce((a, b) => a + b, 0); }
```

## Prototypy i `this`

- Każdy obiekt ma `[[Prototype]]` (dostęp przez `Object.getPrototypeOf`)
- `this` zależy od **kontekstu wywołania**, nie definicji
- Użyj `.bind()`, `.call()`, `.apply()` do kontroli `this`

## Zdarzenia (Events)

```js
element.addEventListener('click', handler);
element.removeEventListener('click', handler);

// Propagacja
event.stopPropagation(); // zatrzymuje bąbelkowanie
event.preventDefault();  // zapobiega domyślnemu zachowaniu
```