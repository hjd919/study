```
#!/bin/sh
backupdir=/etc/mysql/backup
date=`date +%Y%m%d`

for dbname in kt
do
        /usr/bin/mysqldump --quick -uroot -p'Hjd123!@#' $dbname | gzip > ${backupdir}/${dbname}_${date}.sql.gz
        find $backupdir -name "${dbname}_*.sql.gz" -type f -mtime +15 -exec rm {} \; > /dev/null 2>&1
done
```
