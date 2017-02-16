title: Zend Insert Update ON Duplicate
link: http://vandersluijs.nl/blog/2010/10/zend-insert-update-on-duplicate.html
author: tvdsluijs
description: 
post_id: 265
created: 2010/10/28 17:10:00
created_gmt: 2010/10/28 17:10:00
comment_status: open
post_name: zend-insert-update-on-duplicate
status: publish
post_type: post

# Zend Insert Update ON Duplicate

Many people struggle with the Insert / Update on duplicate feature of MySQL within Zend.  
  
I also had a problem with this as the Zend does not support this in the framework .  
  
To bad, so I have written my own, Insert and Update on Duplicate function.  
  
  
  
Here it is:  
[php]  
/**  
*   
* Create an Insert or Update on Duplicate statement  
*  
* @author Theo  
* @version 1  
* @since 28 okt. 2010  
*   
* @param string $tableName The name of the table  
* @param array $fields The Field names and data in it put in the array.  
* @param string $IndexField The name of the index field  
*/  
public function CreateInsertUpdate($tableName, array $fields = array(), $IndexField) {  
$fieldString = '';  
echo "EEN";  
print_pre($fields);  
echo "TWEE";  
  
if (count($fields)) {  
foreach ($fields as $fieldKey => $field) {  
$fieldNames[] = UniFrame_PDO::getInstance('main')->quoteIdentifier($fieldKey);  
$fieldData[] = "'".$field."'";  
$fieldUpdate[] = UniFrame_PDO::getInstance('main')->quoteIdentifier($fieldKey)."='".$field."'";   
}  
  
$fieldNameString = ' ('.implode(',', $fieldNames).')';  
$fieldDataString = ' ('.implode(',', $fieldData).')';  
$fieldUpdateString = implode(',', $fieldUpdate);  
}  
  
$query = "INSERT INTO ".$tableName.   
$fieldNameString.  
" VALUES ".  
$fieldDataString.  
" ON DUPLICATE KEY UPDATE ".$IndexField."=LAST_INSERT_ID(".$IndexField."), ".  
$fieldUpdateString;  
  
return $query;   
}  
[/php]  
  
You can even fetch the last insert id with it (even when it updates, then it returns the index id).  
  
Usage  
[php]  
$tableName = "contacts";  
$data = array(  
'name' => 'Obama',  
'firstname' => 'teddy',  
'age' => '35');  
$IndexField = "contact_id";  
  
$query = CreateInsertUpdate($tableName, $data, $IndexField );  
$db->query($query);  
  
$id = $db->lastInsertId();  
[/php]