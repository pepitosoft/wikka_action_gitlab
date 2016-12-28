# WikkaWiki GitLab Action plugin

[![GitHub](https://raw.githubusercontent.com/pepitosoft/wikka_action_github/master/images/github.png)](https://d3js.org/)
[![WikkaWiki](https://raw.githubusercontent.com/pepitosoft/wikka_action_github/master/images/wizard.gif)](http://wikkawiki.org/HomePage)
[![KnpLabs/php-github-api](https://raw.githubusercontent.com/pepitosoft/wikka_action_github/master/images/KnpLabs.png)](https://github.com/KnpLabs/php-github-api)

## What is this?

This is a a action plugin for easily integrate GitHub projects. For now only get the README of the project, but this can grow.

Easy step:

1. Put this repo on "/plugins/actions/force" directory.

## Why?

Is a very easy way to create and follow projects on GitHub.

## How?

This plugin works like any action plugin on WikkaWiki:

1. Addind the action like usual:

For example:

```markup
 {{github}}
```

or

```markup
{{github user="oemunoz" repo="Wikka-md-handler"}}
```

### How install it?

#### Install the action:

The first is like a simple Action plugin, this meaning that you have to add "/github" directory to actions path:

Drop this repo on your "/plugins/actions/github" directory.

Directory Estructure:

```bash
cd plugins/actions
mkdir github
git clone https://github.com/pepitosoft/wikka_action_github.git github/
```

## FAQs and TODOs

- Is part of the default plugins of WikkaWiki

> R: For now, is not, but we gonna to try.

- [ ] TODO: Add GitHub repository information, like user and others.
- [ ] TODO: Some mark for limit the action.

# Powered by:
- [WikkaWiki](http://wikkawiki.org/HomePage) is a flexible, standards-compliant and lightweight wiki engine written in PHP, which uses MySQL to store pages.
- [KnpLabs/php-github-api](https://github.com/KnpLabs/php-github-api) a simple PHP GitHub API client, Object Oriented, tested and documented. For 5.5+

# References:
- [Using the GitHub API and PHP to Get Repository Information](https://davidwalsh.name/github-markdown)
