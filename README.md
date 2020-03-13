# class-constants-helper
A tiny package that makes working with PHP class constants easier

Have you ever noticed yourself doing stuff like this:

```php
<?php

class Artist {
  const ARTIST_TYPE_MUSICIAN = 0;
  const ARTIST_TYPE_COMEDIAN = 1;
  const ARTIST_TYPE_MAGICIAN = 2;
}
```

And then somewhere later, maybe in the views:

```html
<select>
  <option value="{{ Artist::ARTIST_TYPE_MUSICIAN }}">Musician</option>
  <option value="{{ Artist::ARTIST_TYPE_COMEDIAN }}">Comedian</option>
  <option value="{{ Artist::ARTIST_TYPE_MAGICIAN }}">Magician</option>
</select>
```

Now, wouldn't you want to just iterate through them instead? They all have the same prefix after all.
This package does exactly that:

```
$ composer require tixelrocks/class-constants-helper
```

Now you have a new helper function constants() loaded through composer's auto-load. We can simplify our select input now:

```html
<select>
  @foreach (constants(Artist::class, 'ARTIST_TYPE') as $value)
    <option value="{{ $value }}">{{ $value }}</option>
  @endforeach
</select>
```
