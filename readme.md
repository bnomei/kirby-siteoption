# Kirby Siteoption

![GitHub release](https://img.shields.io/github/release/bnomei/kirby-siteoption.svg?maxAge=1800) ![License](https://img.shields.io/github/license/mashape/apistatus.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-2.3%2B-red.svg)

Kirby CMS Tag to get values of 'site'-blueprint text/textarea-fields.

This plugin is free but if you use it in a commercial project please consider to [make a donation 🍻](https://www.paypal.me/bnomei/2).

## Requirements

- [**Kirby**](https://getkirby.com/) 2.3+

## Installation

### [Kirby CLI](https://github.com/getkirby/cli)

```
kirby plugin:install bnomei/kirby-siteoption
```

### Git Submodule

```
$ git submodule add https://github.com/bnomei/kirby-siteoption.git site/plugins/kirby-siteoption
```

### Copy and Paste

1. [Download](https://github.com/bnomei/kirby-siteoption/archive/master.zip) the contents of this repository as ZIP-file.
2. Rename the extracted folder to `kirby-siteoption` and copy it into the `site/plugins/` directory in your Kirby project.

## Usage

Let's assume you have `site/blueprint/site.yml` with a field named `contactadress`.

```
  contactadress:
    label: Contact Adress
    type:  textarea
```

When editing your pages in the Panel you want to get that value inside a textfield. This plugin makes that easy.

```
(siteoption: contactadress)
```

Or you can get the value of the field parsed with `kirbytext()`.

```
(siteoption: contactadress output: kirbytext)
```

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bnomei/kirby-siteoption/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
