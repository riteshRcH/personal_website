# personal_website
http://ritesht.com/


Note: On server startup for MS SQL DB, if you get the error: ".. may cause cycles or multiple cascade paths". Since
MS SQL does not support multiple cascade paths (as might lead to cycles), there are 2 fixes for the same:
1. Fix your domain model to avoid cascade cycles
2. Comment (put `//` at beginning) the following line in all files in `entities` folder: `onUpdate: "CASCADE"`.
`cd` into `entities` folder and perform the below `sed` command for 1 time comment in all files: 
`sed -i 's~onUpdate: "CASCADE"~//onUpdate: "CASCADE"~g' *.js`
