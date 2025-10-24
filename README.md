# HH New Relic Module for PrestaShop

## Description

Optimize New Relic monitoring for PrestaShop by providing better transaction naming and custom parameters.

This module allows you to:
- Name transactions according to a customizable pattern
- Add custom parameters to New Relic for better filtering
- Configure whitelist/blacklist for specific controllers
- Sanitize transaction names

## Requirements

- PrestaShop 1.7.8.0 or higher
- PHP New Relic extension installed and configured
- PHP 7.4 or higher

## Installation

1. Download the module
2. Upload it to your PrestaShop modules directory
3. Install it from the Back Office > Modules > Module Manager
4. Configure the module settings

## Configuration

After installation, configure the module in Back Office:

- **Enable/Disable**: Toggle the module functionality
- **Pattern**: Define the transaction naming pattern (available placeholders: `{controller}`, `{action}`, `{route}`, `{uri}`)
- **Whitelist**: Comma-separated list of controllers to monitor (empty = all)
- **Blacklist**: Comma-separated list of controllers to exclude
- **Sanitize**: Enable/disable transaction name sanitization

## License

Academic Free License (AFL 3.0)

## Author

Hennes Hervé - [http://www.h-hennes.fr/blog/](http://www.h-hennes.fr/blog/)
