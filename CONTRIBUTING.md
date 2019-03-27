# Contribution guidelines

This is intended to be a public project that anyone can participate in. If you would like to add support for new functions, fix a bug, do performance optimization etc. please read this guide.

Fork, then clone the repo:

```bash
git clone git@github.com:your-username/vipps-php.git
```

Install it:

```bash
composer install
```

Make sure the tests pass:

```bash
composer run-script test
```

Make your changes. Add tests for your changes (where it makes sense). Make sure the tests pass:

```
composer run-script test
```

Push to your fork and **[submit a pull request][pr]**.

[pr]: https://github.com/apility/vipps-php/compare/

At this point you're waiting on us to accept the request. We like to at least comment on pull requests
within a week (and, typically, within 24 hours). We may suggest
some changes or improvements or alternatives.

Some things that will increase the chance that your pull request is accepted:

* [Write tests](https://phpunit.de/getting-started/phpunit-7.html)
* [Write a good commit message](.github/COMMIT_MESSAGE_GUIDELINES.md)
