| Description:                                        | Match:                                                     | Rename:                    |
| --------------------------------------------------- | ---------------------------------------------------------- | -------------------------- |
|                                                     | Screenshot_(\d{8})-(\d*)                                   | ehdms\_\1_@@@\_\2          |
| Screenshot_2016-07-12-05-19-49.png                  | Screenshot_(\d{4})-(\d{2})-(\d{2})-(\d{2})-(\d{2})-(\d{2}) | ehdms\_\1\2\3\_@@@\_\4\5\6 |
| ehScreenshot_2016.09.08_916.png                     | ehScreenshot_(\d{4})\.(\d{2})\.(\d{2})\_(.*)               | ehdms\_\1\2\3\_@@@\_\4     |
| ehmss_20171221\_@@@\_0134.png                       | ehmss                                                      | ehdms                      |
| ehmss_20160919-185229.png                           | ehmss_(\d{8})-(\d*)                                        | ehdms\_\1\_@@@\_\2         |
| Screenshot_20200316-192744_Amazon Shopping.jpg      | Screenshot\_(\d{8})-(\d{6})\_(.*)                          | ehdms\_\1\_\3_\2           |
| ehScreenshot_Computer_2015.05.15_WifiNetw..._01.png |                                                            |                            |