# creditcards.com

## Assignments

### Exercise 1
1. Design a product object.
   A product should include a name and description.
2. Then, create a Credit Card specific object that extends from the product object.
   A Credit Card should include an annual percentage rate.

### Exercise 2
Complete the missing function: (do not use array sorting function)
 
```
<?php
/*
 * Return and array of the duplicated numbers in $myArray
* Answer: array(1, 5, 9)
*/
$myArray = array(1, 5, 5, 44, 37, 26, 43, 9, 1, 88, 32, 9, 1, 5);
print_r(findDuplicates($myArray));
 
function findDuplicates($myArray){
 
 
 
 
 
}
?>
```

### Exercise 3
1. Given a table called credit_cards and with a field called card_title, please write a query that shows a list of the unique card_titles that exist in the table.
2. Given the table below called salaries containing a field called employee_salary
```
Table Name - salaries
+------------+--------------+------+
| Field Names:
+------------+--------------+------+
| employee_salary
+------------+--------------+------+
| employee_name
+------------+--------------+------+
```
  a. Write a query that shows the 4th highest paid employee’s name and salary:
  b. Using the above table, write a query using a MySQL aggregate function that shows the employee that has the smallest salary:

Use the following tables to answer questions 3 - 5.
```
mysql> select * from demo_people;
+------------+--------------+------+
| name       | phone        | pid  |
+------------+--------------+------+
| Mr Brown   | 01225 708225 |    1 |
| Miss Smith | 01225 899360 |    2 |
| Mr Pullen  | 01380 724040 |    3 |
+------------+--------------+------+
```
```
mysql> select * from demo_property;
+------+------+----------------------+
| pid  | spid | selling              |
+------+------+----------------------+
|    1 |    1 | Old House Farm       |
|    3 |    2 | The Willows          |
|    3 |    3 | Tall Trees           |
|    3 |    4 | The Melksham Florist |
|    4 |    5 | Dun Roamin           |
+------+------+----------------------+
```
3. Write a query that produces these results:
```
+------------+--------------+----------------------+
| name       | phone        | selling              |
+------------+--------------+----------------------+
| Mr Brown   | 01225 708225 | Old House Farm       |
| Miss Smith | 01225 899360 | NULL                 |
| Mr Pullen  | 01380 724040 | The Willows          |
| Mr Pullen  | 01380 724040 | Tall Trees           |
| Mr Pullen  | 01380 724040 | The Melksham Florist |
+------------+--------------+----------------------+
```
4.  Write a query that produces these results:
```
+-----------+--------------+----------------------+
| name      | phone        | selling              |
+-----------+--------------+----------------------+
| Mr Brown  | 01225 708225 | Old House Farm       |
| Mr Pullen | 01380 724040 | The Willows          |
| Mr Pullen | 01380 724040 | Tall Trees           |
| Mr Pullen | 01380 724040 | The Melksham Florist |
| NULL      | NULL         | Dun Roamin           |
+-----------+--------------+----------------------+
```
5.  If the table demo_people was copied into a table called demo_people_special, write a query that would display all the results from both tables?
