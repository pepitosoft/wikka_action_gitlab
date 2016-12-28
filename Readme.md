# WikkaWiki GitLab Action plugin

[![GitLab](https://gitlab.com/oemunoz/wikka_action_gitlab/raw/master/images/gitlab.png)](https://gitlab.com/)
[![WikkaWiki](https://gitlab.com/oemunoz/wikka_action_gitlab/raw/master/images/wizard.gif)](http://wikkawiki.org/HomePage)
[![m4tthumphrey/php-gitlab-api](https://gitlab.com/oemunoz/wikka_action_gitlab/raw/master/images/gitlab_php.png)](https://github.com/m4tthumphrey/php-gitlab-api)

## What is this?

This is a a action plugin for easily integrate GitLab projects. For now only get the README of the project, but this can grow.

Easy step:

1. Put this repo on "/plugins/actions/gitlab" directory.

## Why?

Is a very easy way to create and follow projects on GitLab.

## How?

This plugin works like any action plugin on WikkaWiki:

1. Addind the action like usual:

For example:

```markup
 {{gitlab}}
```

or

```markup
{{gitlab repo="2135786" pathfile="README.md"}}
```

more opitons

```markup
{{gitlab repo="2135786" pathfile="README.md" server="https://tuserver.yupi/api/v3/" token="yourtokensharedbadidea"}}
```
Note: Be careful dont share your token on a shared wiki. If the repository is public maybe dont need to log.

### How install it?

#### Install the action:

The first is like a simple Action plugin, this meaning that you have to add "/gitlab" directory to actions path:

Drop this repo on your "/plugins/actions/gitlab" directory.

Directory Estructure:

```bash
cd plugins/actions
mkdir gitlab
git clone https://gitlab.com/oemunoz/wikka_action_gitlab.git gitlab/
```

## FAQs and TODOs

- Is part of the default plugins of WikkaWiki

> R: For now, is not, but we gonna to try.

- [ ] TODO: Add GitLab repository information, like user and others.
- [ ] TODO: Some mark for limit the action.

# Powered by:
- [WikkaWiki](http://wikkawiki.org/HomePage) is a flexible, standards-compliant and lightweight wiki engine written in PHP, which uses MySQL to store pages.
- [m4tthumphrey/php-gitlab-api](https://github.com/m4tthumphrey/php-gitlab-api) GitLab API client for PHP http://gitlab.org

# References:
- [Using the GitHub API and PHP to Get Repository Information](https://davidwalsh.name/github-markdown)
