# Install for Development
`composer install`

# production install (local)
`composer install --no-dev --optimize-autoloader`

# deploy (remote)
`composer install`  
`./bin/dep deploy`

# Dependencies
Dependencies are managed by Composer. The following extension are developed for this site but have their own repository.
Install these from source for Development (Composer can do that also for you)
* [ffpi_theme](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_theme) - Fluid Templates, CSS and TypoScript Configuration for Freifunk Pinneberg
* [ffpi_helgo_theme](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_helgo_theme) - ffpi_theme overrides for Helgoland
* [ffpi_nodecounter](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_nodecounter) - Nodecounter on the top right of the website.
* [ffpi_node_updates](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_node_updates) - Node and Gateway monitoring with E-Mail notifications
* [ffpi_firmware_list](https://github.com/freifunk-pinneberg/typo3-tx_ffpi_firmware_list) - Parses the Firmware directory and generates a list with download links
