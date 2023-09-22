# STEPS TO RESTORE WORDPRESS in 2 part Database Only mode:

## SETTINGS TO SAVE
- Export SmashBalloon feed settings

## EXPORT DB
- Unselect and dbs that are causing problems
- Download installer and archive

## ON LOCALHOST

- Create new database in phpMyAdmin
- Install WordPress basic in the root folder
- After successful wordpress install, put archive and installer in root folder and run installer


In duplicator restore, only choose these plugin on step 3 > Scan Options > Activate Plugins right:
- Duplicator
- Elementor
- Essential-addons-for-elementor-lite

Then login to backend
- If you see "_Sorry you are not allowed to access this page_", just go directly to yoursitename/wp-admin

- Replace wp-content folder

- Activate all plugins
- Deactivate Really Simple SSL on localhost

- Remove installation files



