# Traits

I traits sono un meccanismo di riuso del codice che permette di condividere metodi tra più classi senza utilizzare l’ereditarietà tradizionale. Servono a ridurre la duplicazione e a comporre comportamenti in modo flessibile.

## Caratteristiche principali

- Un trait **non è una classe** e **non può essere istanziato**.
- I traits possono contenere:
  - Metodi
  - Proprietà _(anche se è buona pratica usarle con cautela)_
- Una classe può usare **più traits** contemporaneamente.
- I traits **non creano una gerarchia** come le classi astratte.
- Non sostituiscono le interfacce, ma le integrano.

## Sintassi e definizione

```php
trait LoggerTrait {
    public function log($msg) {
        echo $msg;
    }
}
```
