# DavidPagini.com

[![Build Status](https://travis-ci.org/dpagini/davidpagini.svg?branch=master)](https://travis-ci.org/dpagini/davidpagini)

Source code for the future davidpagini.com.

## Tools
* This project structure was generated with acquia/bolt and modified.

## Notes
* The goal of this repo will be to eventually work for a Windows dev environment, but for now is being built on Mac OS.

## Documentation (/docs)
* [Installation](docs/installation.md)
* [Repo Architecture](docs/architecture.md)
* [Local Development](docs/local-development.md)

Documentation by role:

* Developer
    * [Onboarding](readme/onboarding.md): “how do I get up and running on project work?”
    * [Repository architecture](readme/repo-architecture.md): “how is the code organized, and why?”
    * [Running project tasks](readme/project-tasks.md): “how do I _____ on my local machine?”
    * [Best practices](readme/best-practices.md): "how should I write code?"
    * [Workflow](readme/dev-workflow.md): “how do I contribute my code to this project?”
    * [Automated testing](tests/README.md): “how do I write / run them, and why should I care?”
* Technical Architect
    * [Project Architecture document](readme/architecture.md)
    * [Deploying to cloud](readme/deploy.md)
    * [Release process](readme/release-process.md)
    * [Setting up continuous integration](build/README.md#ci)
    * [Open source contribution](readme/os-contribution.md)

## Features
* Using `composer` instead of `drush make` to build Drupal
  * More compatible with Windows

## TODO
* Travis?
  * PHP Unit
  * Behat
* cleanup Phing

## Files (move this to /docs/files?)
* .drush-use - from Bolt. Need more info. References /drush.wrapper
* drush.wrapper - from Bolt. Need more info.
* project.yml - from Bolt.
