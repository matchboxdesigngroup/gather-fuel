# {{ Client Name }} - {{ Project Name }}

> This repository contains the custom development tools, plugins and theme for the {{ Client Name }} {{ Project Name }}. 

## Features

- The Gather Fuel project scaffolding.
- A child theme of Kindling by Matchbox.
- A must-use plugin for registering custom post types and taxonomies.

View the [project documentation]({{ Add link to project page in Confluence }}) for a full list of features and functionality. 

## Local Development

### Requirements

- [DDEV](https://ddev.readthedocs.io/en/stable/)

### Environment setup

Once you have cloned the project repo, you will need to complete the following steps to ensure your local environment is properly configured.

1. Run `ddev start` to start the project.
1. Run `ddev wp core download` to download the latest version of WordPress.
1. Run `ddev wp core install --url='$DDEV_PRIMARY_URL' --title='{{ Client Name }} - {{ Project Name }}' --admin_user=matchbox --admin_email=devops@matchboxdesigngroup.com --prompt=admin_password` to install WordPress using wp-cli.
1. Run `composer install` to install the latest version of Kindling and the Matchbox recommended plugins.

## Deployments