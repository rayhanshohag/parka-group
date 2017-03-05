Design a mysql database and write SQL queries.
Business objects:
-        Hierarchical categories with names.
-        Items for sale with name and price.
-        Item type. Each item has a type - for example table, cup, fork.
Relations:
-        One category can hold many items.
-        One item can be placed only to one category.
-        One item has only one type describing it.
Write sql/php:
-        To get all items from category 'X'
-        To get all items from category 'X' including all sub-categories

Answer is below:

categories :
id       name       parent_id 
 
Items :
id	name	Price	Type     category_id 


'SELECT * FROM products WHERE category_id = x'

"SELECT * FROM products WHERE category_id = 'X'
OR category_id IN (
  SELECT parent_id FROM categories 
    WHERE id = 'X'
)"
