# Gather Fuel

> Gather fuel is the scaffolding used for all WordPress projects created by Matchbox.

[![Support Level](https://img.shields.io/badge/support-active-green.svg)](#support-level) [![Release Version](https://img.shields.io/github/v/tag/10up/10up-experience?label=release)](https://github.com/10up/10up-experience/tags) ![WordPress tested up to version](https://img.shields.io/badge/WordPress-v5.9%20tested-success.svg) [![GPLv2 License](https://img.shields.io/github/license/10up/10up-experience.svg)](https://github.com/10up/10up-experience/blob/develop/LICENSE.md)

## Features

- [DDEV](https://ddev.readthedocs.io/en/stable/) for launching local development environments.
- Easy install of recommended plugins and [Kindling](https://github.com/matchboxdesigngroup/kindling) using Composer.
- A must-use plugin for registering custom post types and taxonomies.
- Preset `.deployignore` and `.gitignore` files.

## Getting started

### Requirements

- [DDEV](https://ddev.readthedocs.io/en/stable/)

### Setting up a new project

The primary goal of Gather Fuel is to streamline the process of creating new projects.
The steps below should only be followed when creating a new project.

1. Create a new repo for your project and clone it to your local environment.
1. Download the latest release of Gather Fuel and extract its contents into your local project directory.
1. Configure DDEV.
  1. Open the terminal (or equivalent) at the project root.
  1. Run `ddev config --database=mysql:8.0 --project-type=wordpress --php-version=8.0` to create the DDEV `config.yml` file.
1. Replace the default Gather Fuel readme by deleting the `readme.md` file. Then rename the `readme-example.md` file to `readme.md`.
1. Update the project `readme.md` file with your project details.
  1. Replace all instances of `{{ Project Name }}` with the project name.
  1. Replace all instances of `{{ Client Name }}` with the client's name.
  1. Replace all instances of `{{ repository-name }}` with the repository name.
1. Commit all changes to the project repo using `🌱 Initial commit` as the commit message.

You should follow the Local Development steps from the project readme from this point.

## Support level

:green_circle: **ACTIVE** - Matchbox is actively working on Gather Fuel, and we expect to continue work for the foreseeable future, including keeping tested up to the most recent version of WordPress. Bug reports, feature requests, questions, and pull requests are welcome.
