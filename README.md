# Freifunk Pinneberg Website
This is the main Freifunk Pinneberg website as you can see it on https://pinneberg.freifunk.net or https://www.ffpi inside the mesh.
It also hosts the Freifunk Helgoland Website https://helgoland.freifunk.net

The site is based on TYPO3 with some custom extensions.

## Dependencies
Dependencies are managed by Composer. The following extension are developed for this site but have their own repository.

* [ffpi_theme](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_theme) - Fluid Templates, CSS and TypoScript Configuration for Freifunk Pinneberg.
* [ffpi_helgo_theme](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_helgo_theme) - ffpi_theme overrides for [Helgoland](https://helgoland.freifunk.net).
* [ffpi_nodecounter](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_nodecounter) - Nodecounter on the top right of the website.
* [ffpi_node_updates](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_node_updates) - Node and Gateway monitoring with E-Mail notifications. [Live Demo](https://pinneberg.freifunk.net/knoten-benachrichtigungen)
* [ffpi_firmware_list](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_firmware_list) - Parses the Firmware directory and generates a list with download links. [Live Demo](https://pinneberg.freifunk.net/firmware)

# Install
## Install for Development
`composer install`

## production install (local)
`composer install --no-dev --optimize-autoloader`

## production deploy (remote)
For Deployment [deployer](https://github.com/deployphp/deployer) is used.  
You can change the configuration in deploy.php  
To run the deployment, first install the dependencies including dev via composer `composer install`  
then run `./bin/dep deploy`

# Quality control
## phpstan
PHPStan is a static code Analysis Tool. It's installed as a dev dependency via composer. The configuration is saved in phpstan.neon  
You can run it with the command `php ./bin/phpstan`

## rector
Rector is a tool for automated Refactoring. It's installed as a dev dependency via composer. The configuration is saved in rector.php  
You can run it with the command `php ./bin/rector process --dry-run`.

## typo3scan
typo3scan checks for deprecated code in typo3 extensions  
You can run it with the command `php bin/typo3scan scan web/typo3conf/ext/`

## TypoScript Lint
It looks if the typoscript code is beatufull or not.  
You can run it with the command `php bin/typoscript-lint`
