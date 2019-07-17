# Magento2 Extend Weight Units
extends 3 more weight units in magento2

:blue_heart:  Add ratti

:blue_heart:  Add carats

:blue_heart:  Add grams

## How to Install
- Download the zip file or clone the repo
- run magento commands
  - php bin/magento module:enable Malpani_Weightunits
  - php bin/magento setup:upgrade --keep-generated
  - php bin/magento setup:di:compile
  - php bin/magento cache:clean

## After installing
Go to Stores > Configuration > General > General > Locale Options > Weight Unit	
