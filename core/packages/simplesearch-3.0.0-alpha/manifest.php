<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => '# MODX SimpleSearch
![SimpleSearch version](https://img.shields.io/badge/version-3.0.0-blue.svg) ![MODX version requirements](https://img.shields.io/badge/modx%20version%20requirement-3.0%2B-brightgreen.svg)

## Installation
Simply install it through the top menu ```Extras > Installer``` and search for ```SimpleSearch```. Install it from there. After installing it, it is recommended to clear your MODX cache, through the top menu ```Manage > Clear Cache```.

## Upgrade risks
This is currently alpha software and is only compatible with MODX 3.x and higher. This has been tested on basic search queries, but you may encounter problems with more advanced setups. 

## Autosuggest
A processor has been provided for retrieving a list of search suggestions based on a Template Variable containing a comma delimited list of search terms. 
You can configure the TV to use by setting `simplesearch.autosuggest_tv`, which can either be the TV name or id.

You can use the example (requires jQuery) code below for retrieving a list of search suggestions.

```javascript
$(\'.simplesearch-search-form input[type="text"]\').on(\'keyup\', function () {
    var value = $(this).val();

    $.ajax({
        url         : \'/assets/components/simplesearch/connector.php?action=web/autosuggestions&search=\' + value,
        dataType    : \'JSON\',
        complete    : function (result) {
            console.log(result.results);
        }
    });
});
```

## Bugs and feature requests
We value your feedback, feature requests and bug reports. Please issue them on [Github](https://github.com/modxcms/SimpleSearch/issues/new)..

Need help? [Contact MODX Help Desk](mailto:help@modx.com)
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modNamespace',
      'guid' => 'cff876dea05bd7c08df7b8062bf389b8',
      'native_key' => 'simplesearch',
      'filename' => 'MODX/Revolution/modNamespace/a403c14a8dbd002eb0a0091be6d8ab2a.vehicle',
    ),
    1 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => 'b69f3fe359bb28c90d6d7c334e23c846',
      'native_key' => 'simplesearch.driver_class',
      'filename' => 'MODX/Revolution/modSystemSetting/23a58510271e13494008ee0bb6eb7f17.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modSystemSetting',
      'guid' => '50af03689621c2dd5b1cb13cc3364204',
      'native_key' => 'simplesearch.autosuggest_tv',
      'filename' => 'MODX/Revolution/modSystemSetting/dfc8da8d1c90e3d091b113eb851250c8.vehicle',
    ),
    3 => 
    array (
      'vehicle_package' => '',
      'vehicle_class' => 'xPDO\\Transport\\xPDOObjectVehicle',
      'class' => 'MODX\\Revolution\\modCategory',
      'guid' => 'a04a2ac4033bec82c28d20f0bb36e7c6',
      'native_key' => NULL,
      'filename' => 'MODX/Revolution/modCategory/788370aed9b442471bd1ffd202680e56.vehicle',
    ),
  ),
);