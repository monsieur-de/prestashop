# CHANGELOG

## [24/07/2024] Version 3.4.5

Fixes :

* Adjustement of the regex expedition restriction

## [09/07/2024] Version 3.4.4

Fixes :

* Fix error during install on php8 and prestashop 8 (SQLSTATE[42000] error)
* You can't generate labels for home delivery with api 1 credentials anymore
* Rename and add traduction about account fields

## [09/07/2024] Version 3.4.3

Fixes :

* Fix id_order null in selected_relay when order existing

## [08/07/2024] Version 3.4.2

Fixes and improvements:

* Fix JS - display relay point
* Fix admin order button was blocked
* Fix display admin order label generation button only for MR orders

## [20/05/2024] Version 3.4.1

Fixes and improvements:

* Fix error on print label for expedition lower than 8 number

## [20/05/2024] Version 3.4.0

Fixes and improvements:

* Add Hom delivery with the implements of API 2

## [10/10/2023] Version 3.3.12

Fixes and improvements:

* Fix delivery_mode which cause and error in relay widget

## [19/09/2023] Version 3.3.11

Fixes and improvements:

* DRI carriers has been deleted.
* Fix tracking url http link to https

## [11/08/2023] Version 3.3.10

Fixes and improvements:

* data sent to webservice to generate home delivery label

## [27/07/2023] Version 3.3.9

Fix:

* data used to generate label

## [17/07/2023] Version 3.3.8

Fix:

* change visibility of self called function

## [30/06/2023] Version 3.3.7

Fix:

* method to retrieves iso_code for tracking url

## [27/04/2023] Version 3.3.6

Fix:

* compiled js file

## [27/03/2023] Version 3.3.5

Fix:

- add autoload call to fix namespace issue on 3.3.0 upgrade

## [17/03/2023] Version 3.3.4

Fix:

- Fix a bad display of relay point because of php version

## [02/03/2023] Version 3.3.3

Fix:

- delivery_type property upgrade file


## Version 3.3.2

Fix:

- Resize logo into 50px max

## Version 3.3.1

Fix:

- Use relay image on home delivery option

## Version 3.3.0

Feature:

- Add new "Locker" carrier's mode

Fixes and improvements:

- Change logo to InPost/MondialRelay one

- Change shared main text

- Update translations

## Version 3.2.6

Fixes and improvements:

* Add tab translation

## Version 3.2.5

Fixes and improvements:

* Add a button to track the order on order details front page

## Version 3.2.4

Fixes and improvements:

* Prestashop 8.0 compatibility

## Version 3.2.3

Fixes and improvements:

- Fix compatibility with module Cdiscount by feedbiz

## Version 3.2.2

Fixes and improvements:

- take all country into acount during check webservice connection 

## Version 3.2.1

Fix

- Api url change

## Version 3.2.0

New feature:

- Add type of branding inPost and parameter on carrier
- Change display of the widget

## Version 3.1.6

Fixes and improvements:

- The orders from marketplaces are now correctly created.

## Version 3.1.5

Fixes and improvements:

- Remove the "COLLATE" parameter on the "CREATE TABLE" MySQL queries because it may cause errors with MySQL 8.x
