---
title: PHP Conventions
description: Customizing your Jigsaw docs site
extends: _layouts.documentation
section: content
---

# PHP Coding Conventions

## **Naming**

1. <span class="font-medium text-indigo-600">Self-explanatory names<span>
2. <span class="font-medium text-indigo-600">If context is given, use short names<span>
3. <span class="font-medium text-indigo-600">Use positive logic (e.g. `is_visible` instead of `is_hidden`)<span>
4. <span class="font-medium text-indigo-600">Don't use abbreviations<span>
5. <span class="font-medium text-indigo-600">Spell check<span>
6. <span class="font-medium text-indigo-600">Always start a Boolean with 'is' or 'has'<span>

## **Comments**

We use comments:

- <span class="font-medium text-indigo-600">to explain why a block of code does not seem to fit conventions<span>
- <span class="font-medium text-indigo-600">describe workarounds with`//WORKAROUND: `<span>

## **Strings**

When possible prefer string interpolation above `sprintf` and the `.` operator.

<x-code-comparison>
  <x-slot name="good">
```php
$greeting = "Hi, I am {$name}.";
```
</x-slot>

<x-slot name="bad">
```php
$greeting = 'Hi, I am ' . $name . '.';
```
</x-slot>
</x-code-comparison>

String must be surrounded by single quotes

<x-code-comparison>
<x-slot name="good">
```php
$text = 'Today is Monday'
```
</x-slot>

<x-slot name="bad">
```php
$text = "Today is Monday"
```
</x-slot>
</x-code-comparison>


## **Functions**

String must be surrounded by single quotes

<x-code-comparison>
<x-slot name="good">
```php
public function firstFunction(Voucher $voucher): void
{
}

public function secondFunction(Voucher $voucher): void
{
}
```
</x-slot>

<x-slot name="bad">
```php
public function firstFunction(Voucher $voucher): void
{
}
public function secondFunction(Voucher $voucher): void
{
}
```
</x-slot>
</x-code-comparison>